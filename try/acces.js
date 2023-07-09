// Array de usuários permitidos
const usuariosPermitidos = [
  { username: 'admin', senha: 'admin123' },
  { username: 'usuario', senha: 'senha123' }
];


const usuariosManutencao = [
  {username: 'fulano', senha: 'fulano'}
]
// Função chamada no evento de envio do formulário
function verificarLogin() {
  // Pega os valores de usuário e senha do formulário
  const username = document.getElementById('username').value;
  const senha = document.getElementById('senha').value;

  // Verifica se o usuário existe no array de usuários permitidos
  const usuarioExistente = usuariosPermitidos.find(usuario => {
    return usuario.username === username && usuario.senha === senha;
  });

  if (usuarioExistente) {
    // Usuário existe, armazena informações de autenticação na sessão
    sessionStorage.setItem('usuarioExistente', JSON.stringify(usuarioExistente));

    // Redirecionar para a página autorizada
    console.log('Login bem-sucedido!');
    window.location.href = '../dashboard.html';
  } else {
    // Usuário não existe, exibir mensagem de acesso negado
    console.log('Acesso negado!');
    alert('Acesso negado! Verifique suas credenciais de login.');
  }

   // Impede o envio do formulário
  console.log(usuarioExistente);
}


