function verificarAutenticacao() {
    // Verifica se o usuário está autenticado
    const usuarioExistente = sessionStorage.getItem('usuarioExistente');
  
    if (!usuarioExistente) {
      // Usuário não está autenticado, redireciona para a página de login
      window.location.href = '../try/login.html';
    }
  }
  
  window.onload = function() {
    verificarAutenticacao();
    // Restante do código da página da dashboard
  }
  