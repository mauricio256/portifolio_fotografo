<?php
    session_start();
    include("../model/classes/administrador.php");

    $user  = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
            
    $login = new administrador();
    
    if( $login->login($user, $pass) ):
        $_SESSION['ADM'] = $login->getNome();
        echo" <script>document.location.href='../view/index.php'</script>";
    else:
        $_SESSION['MSG_LOG'] = '<p style="color:red;">Usuário e/ou senha inválido/s</p>';
        echo" <script>document.location.href='../view/login_adm/index.php'</script>";
    endif;   

   

    
    
   





