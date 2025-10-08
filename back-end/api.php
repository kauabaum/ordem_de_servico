<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];

// Conexão com o banco MySQL da Hostinger
$host = 'localhost'; // Normalmente é localhost mesmo na Hostinger
$user = 'testeu208971626_teste';
$password = 'Teste2215';
$dbname = 'u208971626_ordem_servico';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  http_response_code(500);
  echo json_encode(['error' => 'Erro de conexão: ' . $conn->connect_error]);
  exit;
}

// Rota de login simples (POST /login)
if ($method === 'POST' && strpos($_SERVER['REQUEST_URI'], '/login') !== false) {
  $input = json_decode(file_get_contents('php://input'), true); 
  if (!$input || !isset($input['usuario']) || empty(trim($input['usuario']))) {
    http_response_code(400);
    echo json_encode(['error' => 'Usuário obrigatório']);
    exit;
  }
  echo json_encode(['usuario' => trim($input['usuario'])]);
  exit;
}

// Buscar todas as ordens de serviço (GET)
if ($method === 'GET') {
  $sql = "SELECT * FROM ordem_servico ORDER BY data DESC";
  $result = $conn->query($sql);
  $ordens = [];

  while ($row = $result->fetch_assoc()) {
    $ordens[] = $row;
  }

  echo json_encode($ordens);
  exit;
}

// Inserir nova ordem de serviço (POST)
if ($method === 'POST') {
  $input = json_decode(file_get_contents('php://input'), true);
  if (!$input) {
    http_response_code(400);
    echo json_encode(['error' => 'JSON inválido']);
    exit;
  }

  $campos = ['chamado', 'departamento', 'descricao', 'realizado_por'];
  foreach ($campos as $campo) {
    if (empty($input[$campo])) {
      http_response_code(400);
      echo json_encode(['error' => "Campo '$campo' é obrigatório"]);
      exit;
    }
  }

  $stmt = $conn->prepare("INSERT INTO ordem_servico (chamado, departamento, descricao, realizado_por, data) VALUES (?, ?, ?, ?, NOW())");
  $stmt->bind_param(
    "ssss",
    $input['chamado'],
    $input['departamento'],
    $input['descricao'],
    $input['realizado_por']
  );

  if ($stmt->execute()) {
    echo json_encode(['success' => true, 'id' => $stmt->insert_id]);
  } else {
    http_response_code(500);
    echo json_encode(['error' => 'Erro ao salvar no banco']);
  }
  exit;
}

// Método não suportado
http_response_code(405);
echo json_encode(['error' => 'Método não suportado']);
