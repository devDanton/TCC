<?php
if (!isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION['id'])) {
  die("<div class=mensagem>Você não tem permissão para acessar esta página, porque não está logado</div><buttom class= \"btn-enviar\" style ='margin:auto; margin-top:0.5%'</button> <a href=\"login_funcionario.php\">Entrar</a></button>");
}
