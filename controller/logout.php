<?php
    session_start();
    if(isset($_SESSION['ADM'])):
        unset($_SESSION['ADM']);
        echo" <script>document.location.href='../view/index.php'</script>";
    endif;

