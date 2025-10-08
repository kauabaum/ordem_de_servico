document.getElementById('os-form').addEventListener('submit', async (e) => {
  e.preventDefault();

  const chamado = document.getElementById('chamado').value;
  const departamento = document.getElementById('departamento').value;
  const descricao = document.getElementById('descricao').value;
  const realizado_por = document.getElementById('realizado_por').value;

  await fetch('http://localhost/ordem_de_servico/api.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ chamado, departamento, descricao, realizado_por })
  });

  document.getElementById('os-form').reset();
  carregarOS();
});

async function carregarOS() {
  const res = await fetch('http://localhost/ordem_de_servico/api.php');
  const lista = await res.json();
  const container = document.getElementById('lista-os');

  container.innerHTML = lista.map(os => `
    <div class="os-card">
      <p><strong>Chamado por:</strong> ${os.chamado}</p>
      <p><strong>Departamento:</strong> ${os.departamento}</p>
      <p><strong>Descrição:</strong> ${os.descricao}</p>
      <p><strong>Realizado por:</strong> ${os.realizado_por}</p>
      <hr>
    </div>
  `).join('');
}

carregarOS();
