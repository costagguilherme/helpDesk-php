<?php
session_start();
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
      <img src="cssEimagens/logo.png" width="30" height="30" class="d-inline-block align-top mr-3" alt="">
      HELP DESK
    </a>
  </nav>

        
  <div class="d-flex">
    <div class="container align-self-center">
      <div class="row">
        <div class="mx-auto" id="login">
          <div class="mb-3 pt-3">
            <h1>LOGIN</h1>
          </div>
          <form action="valida_login.php" method="post">

            <div>
              <div class="mb-4">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>

              <div class="mb-4">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>


              <?php 
                if (isset($_GET['login']) AND $_GET['login'] == 'erro') { 
              ?>

                  <div class="text-danger">
                    Usuário ou senha inválido(s)
                  </div>

              <?php } ?>


              <?php 
                if (isset($_GET['login']) AND $_GET['login'] == 'erro2') { 
              ?>

                <div class="text-danger">
                  É necessário fazer login
                </div>

              <?php } ?>
              
              
              
              



              <button type="submit" class="btn btn-lg btn-info btn-block">Login</button>
            </div>
          </form> 

          
        </div>
      </div>
    </div>
  </div>
 











          <!--
            <form action="valida_login.php" method="post">
          <input name="email" type="email" class="form-control" placeholder="E-mail">
          <input name="senha" type="password" class="form-control" placeholder="Senha">
          </form> -->

    
</body>
</html>