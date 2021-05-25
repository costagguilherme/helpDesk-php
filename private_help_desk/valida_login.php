<?php

    session_start();

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Admnistrativo', 2 => 'Usuário' );

    $usuarios_app = array(
        array('id' => '1', 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => '2', 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => '3', 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => '4', 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
    );

    foreach ($usuarios_app as $user) {

        if ($user['email'] == $_POST['email'] AND $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];

        }
    }

    // Só será possível acessar as demais páginas se a autenticação for feita com sucesso
    // Se não, o usuário será redirecionado para index.php

    if ($usuario_autenticado) {
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;


        header('Location: home.php?login=erro');
    } 
    
    else {
        $_SESSION['autenticado'] = 'não';
       header('Location: index.php?login=erro');
    }



?>