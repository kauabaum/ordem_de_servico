# 🖥️ Sistema de Ordem de Serviço

> 💻 Desenvolvido em **Electron.js, HTML, CSS e JavaScript**  
> 🌐 Conectado a uma **API hospedada na Hostinger** para acesso ao banco de dados  
> 🏢 Utilizado no setor de TI da **Prefeitura de Rebouças - PR**  

---

## 🧭 Visão Geral

O **Sistema de Ordem de Serviço** é uma aplicação desktop completa que permite o **gerenciamento de ordens de serviço**, controle de diferentes usuários e registro de atividades realizadas.  
A aplicação se conecta à API via **método `fetch`**, trazendo informações em tempo real do banco de dados, e oferece funcionalidades para geração de PDFs e visualização de relatórios detalhados.

---

## ✨ Funcionalidades Principais

### 👤 **Usuários**
- Diferentes pessoas podem registrar serviços
- Controle de quem realizou cada ordem de serviço

### ➕ **Adicionar Registro**
- Criação de novos registros de serviço
- Geração automática de **PDFs** com datas específicas
- Registro de informações detalhadas de cada serviço

### 📊 **Tabela de Serviços**
- Exibe informações completas:
  - **Chamado por**  
  - **Departamento**  
  - **Descrição**  
  - **Realizado por**  
  - **Data**  
- Filtragem e visualização dinâmica das ordens de serviço

### 🔗 **Conexão com API**
- Busca dados do banco de dados remoto via **fetch**  
- Atualização em tempo real da tabela conforme alterações na API  

---

## 🧱 Estrutura do Projeto

---

ordem_de_servico/
├── front-end/ # Interface desktop (Electron, HTML, CSS, JS)
├── back-end/ # Código da API (PHP) hospedada na Hostinger
├── .gitignore
└── README.md

---

📸 Telas Principais

## Login
   ```bash
   https://imgur.com/H9CbJf8
 ```
## Tela Inicial
   ```bash
   https://imgur.com/REkP0LT
 ```
## Adicionar Ordem de Serviço
   ```bash
   https://imgur.com/SoLhOM6
 ```
## Gerar Relatório
   ```bash
   https://imgur.com/CqUixg9
 ```
 ## Relatório Gerado
   ```bash
   https://imgur.com/4gSyOOF
 ```

---

## 🧠 Tecnologias Utilizadas

| Camada | Tecnologias |
|--------|-------------|
| **Linguagem** | JavaScript, HTML, CSS |
| **Framework** | Electron.js |
| **Banco de Dados** | MySQL (Hostinger) |
| **Comunicação** | Fetch API |
| **Recursos** | CRUD, geração de PDF, multiusuário |

---

## 🚀 Como Executar o Projeto

1. Clone o repositório:

```bash
git clone https://github.com/kauabaum/ordem_de_servico.git
```

---

1 - Entre na pasta do frontend:

```bash
cd front-end
```
---
1 - Instale as dependências do Electron:

```bash
npm install
```
---
3 - Execute o aplicativo:

```bash
npm start
```
---
Conecte-se à API configurando a URL no código JavaScript, se necessário.

---

💡 Destaques Técnicos

✅ Sistema desktop funcional com Electron
✅ Multiusuário com controle de registros
✅ Conexão com API remota via fetch
✅ Geração de PDFs com datas específicas
✅ Tabela dinâmica exibindo todos os campos importantes
✅ Estrutura organizada e modular para fácil manutenção

---

✍️ Autor

[Kauã Davi de Senia Baum]
🎓 Técnico de TI - Prefeitura de Rebouças, PR
💻 Apaixonado por desenvolvimento de sistemas e boas práticas de programação

📫 Contato: [kaua.baum@outlook.com]
🌐 GitHub: https://github.com/kauabaum
