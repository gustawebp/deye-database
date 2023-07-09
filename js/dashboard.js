function garantia() {
  window.location.href = './php/abrirGarantia.html';
}

function consult() {
  window.location.href = './php/consultarGarantia.html';
}

function alter() {
  window.location.href = './php/alterarGarantia.html'
}




function verificarAutenticacao() {
  // Verifica se o usuário está autenticado
  const usuarioExistente = sessionStorage.getItem('usuarioExistente');

  if (!usuarioExistente) {
    // Usuário não está autenticado, redireciona para a página de login
    window.location.href = './try/login.html';
  } else {
    // Usuário está autenticado, verifica se é usuário de manutenção
    const usuario = JSON.parse(usuarioExistente);
    const username = usuario.username;

    const usuarioManutencao = usuariosManutencao.find(usuario => {
      return usuario.username === username;
    });

    if (usuarioManutencao && username === 'usuarioManutencao') {
      // Usuário de manutenção logado, redirecionar para outro lugar
      console.log('Usuário de manutenção autenticado!');
      window.location.href = './try/pagina-manutencao.html';
    }
  }
}





window.onload = function() {
  verificarAutenticacao();
  // Restante do código da página da dashboard
}
