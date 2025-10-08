const { app, BrowserWindow } = require('electron');
const path = require('path');
const { exec } = require('child_process');

function createWindow() {
  const win = new BrowserWindow({
    width: 1000,
    height: 700,
    webPreferences: {
      nodeIntegration: true,
      contextIsolation: false
    }
  });

  // Inicia o servidor PHP embutido na porta 8000
  exec('php -S localhost:8000 -t ./php');

  // Carrega a interface HTML
  win.loadFile('index.html');
}

app.whenReady().then(createWindow);
    