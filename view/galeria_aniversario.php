<?php
    session_start();
    include_once('../controller/lista_imagens_aniversario.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Portal RS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

        <!-- Mensagem de erros -->
                <?php
                        if (isset($_SESSION['MSG_DELETE'])):
                             echo $_SESSION['MSG_DELETE'];
                             unset($_SESSION['MSG_DELETE']);
                            
                        endif; 

                ?> 
            <!--Fim Mensagem de erros -->

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <a target="_blank" href="mailto:ricartesilvafotografo@gmail.com"><img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/25/000000/external-email-advertising-kiranshastry-lineal-color-kiranshastry-7.png"/>  ricartesilvafotografo@gmail.com</a>
                        
                    </div>
                    <div class="col-sm-6">
                        <a target="_blank" href="https://wa.me/557488261256"><img src="https://img.icons8.com/color/20/000000/whatsapp--v1.png"/> 74 8826-1256</a>    
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->

        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Inicio</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Galeria</a>
                                <div class="dropdown-menu">
                                    <a href="galeria_aniversario.php" class="dropdown-item">Aniversários</a>
                                    <a href="galeria_casamento.php" class="dropdown-item">Casamentos</a>
                                    <a href="galeria_evento.php" class="dropdown-item">Eventos</a>
                                </div>
                            </div>
                            <a href="index.php#servico" class="nav-item nav-link">Serviços</a>
                            <a href="index.php#contato" class="nav-item nav-link">Contato</a>
                            <a href="index.php#sobre" class="nav-item nav-link">Sobre</a>
                        </div>
                    </div>     
                </nav> 
            </div>   
        </div>
        <!-- Nav Bar End --> 
           <!-- Bottom Bar Start -->
           <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
         

        <!-- galeria aniversarios -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Aniversários</h1>
                </div>

                <?php if (!isset($_SESSION['ADM'])): ?>  <!-- condiçai IF escapando HTML q verifica se o ADM ta logado se nao tiver ele exibe o layout normal  -->
                   <?php foreach ($banco->query($sql) as $row) { ?>  <!-- foreach escapando HTML  para para percorrer a lista de resultado da consulta SQL -->
                        <br>
                        <div class="row align-items-center product-slider product-slider-5"> 
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a>
                                                <img src="<?php echo $row['caminho'] ?>" alt="Product Image">
                                            </a>
                                        </div> 
                                    </div>
                                </div>
                                
                        </div>
                        
                    <?php } ?>  <!-- fecha o foreach, escapando HTML -->     
                <?php else: ?> <!-- condição ALSE do IF acima, escapando HTML --> 
                    <?php foreach ($banco->query($sql) as $row) { ?>  <!-- foreach escapando HTML  para para percorrer a lista de resultado da consulta SQL -->
                        <br><hr>
                        <div class="row align-items-center product-slider product-slider-5"> 
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <form action="" method="GET">
                                            <input  type="text" hidden name="id_img" value="<?php echo $row['id_imagem'] ?>" >
                                            <div class="product-image">
                                                <a>
                                                    <img src="<?php echo $row['caminho'] ?>" alt="Product Image">
                                                </a>
                                            </div>
                                            <a href="../controller/apagar_dados_imagem_aniversario.php?id_imagem=<?php echo$row['id_imagem']?>&caminho_img=<?php echo$row['caminho']?>" style="background-color: gray; padding:5%; font-size:15px; color:white;"><img src="https://img.icons8.com/color/48/000000/delete-forever.png"/>DELETAR IMAGEM</a>
                                        </form>
                                         
                                    </div>
                                </div>    
                        </div>

                        <?php } ?> <!-- fecha o foreach --> 
                        <a href="cadastrar_img_aniversario.php" style=" margin:15px; text-align:center; padding:3%;"><hr>Adicionar nova imagem<img src="https://img.icons8.com/color/200/000000/add-image.png"/></a>
                <?php endif; ?> <!-- fecha condição IF do bloco inteiro-->
                     
                </div>    
            </div>
        </div>
        <!-- galeria aniversarios  End -->


        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Faça seu orçamento grátis</h1>
                    </div>
                    <div class="col-md-6">
                        <a target="_blank" href="https://wa.me/557488261256"><img src="https://img.icons8.com/color/40/000000/whatsapp--v1.png"/> 74 8826-1256</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->                            
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
