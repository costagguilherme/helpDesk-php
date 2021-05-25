<?php require_once("acesso_logica.php");?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="cssEimagens/estilo.css" type="text/css">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top mr-3" alt="">
        HELP DESK
      </a>
      <a href="logoff.php" class="float-left" >SAIR</a>
    </nav>

    <div class="container">    
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              MENU
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img class="mr-4" src="cssEimagens/formulario_abrir_chamado.png" width="70" height="70">
                    <div class="text-info ml-3">Abrir</div>
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="cssEimagens/formulario_consultar_chamado.png" width="70" height="70">
                    <div class="text-info">Consultar</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>