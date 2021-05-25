<?php require_once("acesso_logica.php") ?>

<?php
  $arquivo = fopen('../../private_help_desk/chamados.txt', 'r');
  $chamados = [];

  // Pecorrer o arquivo enquanto houver registros/linhas. Usando o operador de negação para inverter o retorno dado pela função e possibilitar o inicio o laço.
  // Usando o operador de negação para inverter o retorno dado pela função e possibilitar o inicio o laço.
  while(!feof($arquivo)) {

  $registro = fgets($arquivo);  //Irá recuperar o conteúdo de cada linha
  $chamados[] = $registro;

  }

  fclose($arquivo);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="cssEimagens/estilo.css" type="text/css">
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
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
          
              <?php   foreach($chamados as $chamado_individual) {   ?>

              <?php
                  
                $dados_chamado = explode('#', $chamado_individual); //Criando um array a partir do delimitador sharp

                if($_SESSION['perfil_id'] == 2) {
                  //Só é possível ver os próprios chamados
                  if($_SESSION['id'] != $dados_chamado[0]) {
                    continue;
                  }
                }



                if (count($dados_chamado) < 3) {
                  // Caso em um dos chamados falte o título ou categoria ou descrição, tal chamado será ignorado.
                  continue;
                }
              ?>

                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title">  <!--Título-->
                      <?= $dados_chamado[1] ?>     
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">    <!--Categoria-->
                      <?= $dados_chamado[2] ?>    
                    </h6>
                    <p class="card-text">         <!--Descrição-->
                      <?= $dados_chamado[3] ?>
                    </p>
                  </div>
                </div>
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php" >Voltar</a>
                </div>
                <div class="col-6">
                  <a class="btn btn-lg btn-info btn-block" href="abrir_chamado.php" >Abrir outro chamado</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>