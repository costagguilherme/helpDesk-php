<?php
  session_start();

  // Só será possível acessar tal página se a autenticação for feita com sucesso
  if (isset($_SESSION['autenticado']) == false || $_SESSION['autenticado'] != 'sim')
  header('Location: index.php?login=erro2');

?>