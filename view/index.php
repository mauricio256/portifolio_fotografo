<?php
    session_start();
    include_once('../controller/lista_imagens.php');
    
    // registra o numero de acessos ao site e armazena em uma arquivo TXT
	$contador = "reg.txt";	// patch do arquivo de gravação
	define ("adi", 1);	// quantidade a ser adicionada


	$id = fopen($contador, "r+");
	$conteudo = fread($id,filesize($contador));
	fclose($id);
	clearstatcache();

	$conteudo += adi;

	$id = fopen($contador, "r+");
	fwrite($id, $conteudo, strlen($conteudo) + 5);
	fclose($id);
	clearstatcache();	

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Portal RS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="portalrs portal rs ricarte silva fotografo" name="keywords">
        <meta content="portalrs portal rs ricarte silva fotografo fotografo ricarte silva portal de noticias" name="description">

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
        <style>
            a.btn{
                background-color: gray;
                color: white;
                margin: 5px;
            }

        </style>
    </head>

    <body>
            <!-- Mensagem de erros -->
                <?php
                        if (isset($_SESSION['MSG_DELETE'])):
                             echo $_SESSION['MSG_DELETE'];
                             unset($_SESSION['MSG_DELETE']);
                            
                        endif; 

                ?> 
            <!--Fim Mensagem de erros --> 
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <a target="_blank" href="mailto:ricartesilvafotografo@gmail.com"><img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/25/000000/external-email-advertising-kiranshastry-lineal-color-kiranshastry-7.png"/>ricartesilvafotografo@gmail.com</a>
                    </div>
                    <div class="col-sm-6">
                        <a target="_blank" href="https://wa.me/557488261256"><img src="https://img.icons8.com/color/20/000000/whatsapp--v1.png"/>74 98826-1256</a>    
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
                            <a href="#servico" class="nav-item nav-link">Serviços</a>
                            <a href="#contato" class="nav-item nav-link">Contato</a>
                            <a href="#sobre" class="nav-item nav-link">Sobre</a>
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
                            <img alt="portal rs" src="img/logo.png" alt="Logo"><br>Seu portal de eventos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="galeria_aniversario.php"><i class="fa fa-birthday-cake"></i>Aniversario</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="galeria_casamento.php"><i class="fa fa-church"></i>Casamentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="galeria_evento.php"><i class="fa fa-child"></i>Cobertura de eventos</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="img/slider-1.jpg" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-2.jpg" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-3.jpg" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-4.jpg" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-5.jpg" alt="Slider Image" />
                            </div>
                            <div class="header-slider-item">
                                <img src="img/slider-6.jpg" alt="Slider Image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/category-1.jpg" />
                            </div>
                            <div class="img-item">
                                <img src="img/category-2.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Todas as formas de pagamento</h2>
                            <p>
                                Facilidade de pagamento da forma segura e simples
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Iremos até você</h2>
                            <p>
                                Contamos com uma equipe movel que atende os mais diversos bairros de Juazeiro e Petrolina
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>Rapidez na entrega</h2>
                            <p>
                                Entregas de serviços em até 48 Horas  
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>Suporte</h2>
                            <p>
                                Mande uma mensagem, tire suas duvidas.
                                <a target="_blank" href="https://wa.me/557488261256"><img src="https://img.icons8.com/color/20/000000/whatsapp--v1.png"/>74 98826-1256</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category" id="servico">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-3.jpg" />
                            <a class="category-name">
                                <p>Aniversário de Helen Nataly</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/category-4.jpg" />
                            <a class="category-name">
                                <p>Aniversário de Helen Nataly</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/category-5.jpg" />
                            <a class="category-name">
                                <p>Aniversário de Helen Nataly</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/category-6.jpg" />
                            <a class="category-name" >
                                <p>Aniversário de Helen Nataly</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/category-7.jpg" />
                            <a class="category-name">
                                <p>Aniversário de Helen Nataly</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-8.jpg" />
                            <a class="category-name">
                                <p>Aniversário de Helen Nataly</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-9.jpg" />
                            <a class="category-name">
                                <p>Ensaio fotográfico</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-10.jpg" />
                            <a class="category-name">
                                <p>Ensaio fotográfico</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-11.jpg" />
                            <a class="category-name">
                                <p>Aniversário de Helen Nataly</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action"   id="contato" >
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Ricarte Silva fotografo</h1>
                    </div>
                    <div class="col-md-6">
                        <a target="_blank" href="https://wa.me/557488261256"><img src="https://img.icons8.com/color/40/000000/whatsapp--v1.png"/> 74 98826-1256</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->                        
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Trabalhos recentes</h1>
                </div>

                <?php if (!isset($_SESSION['ADM'])): ?>  <!-- condiçai IF escapando HTML q verifica se o ADM ta logado se nao tiver ele exibe o layout normal  -->
                   <?php foreach ($banco->query($sql) as $row) { ?>  <!-- foreach escapando HTML  para para percorrer a lista de resultado da consulta SQL -->
                        <br>
                        <div class="row align-items-center product-slider product-slider-5"> 
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a><?php echo $row['titulo'] ?></a>
                                        </div>
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
                                        <form action="../controller/editar_titulo_imagem.php" method="GET">
                                            <input  type="text" hidden name="id_imagem" value="<?php echo $row['id_imagem'] ?>" >
                                            <div class="product-title">
                                            <label style="color: white;">Titulo:</label> 
                                            <input type="text" name="titulo" id="titulo" value="<?php echo $row['titulo'] ?>">
                                            </div>
                                            <div class="product-image">
                                                <a>
                                                    <img src="<?php echo $row['caminho'] ?>" alt="Product Image">
                                                </a>
                                            </div>
                                            <a href="../controller/apagar_dados_imagem.php?id_imagem=<?php echo$row['id_imagem']?>&caminho_img=<?php echo$row['caminho']?>" style="background-color: gray; padding:5%; font-size:12px; color:white;"><img src="https://img.icons8.com/color/48/000000/delete-forever.png"/>DELETAR IMAGEM</a>
                                            <input type="submit" name="btn-salvar" value="Salvar Titulo" style="background-color: gray; padding:4% 5%; font-size:12px; color:white;" >
                                        </form>
                                         
                                    </div>
                                </div>    
                        </div>

                        <?php } ?> <!-- fecha o foreach --> 
                        <a href="cadastrar_img.php" style=" margin:15px; text-align:center; padding:3%;"><hr>Adicionar nova imagem<img src="https://img.icons8.com/color/200/000000/add-image.png"/></a>
                <?php endif; ?> <!-- fecha condição IF do bloco inteiro-->
                     
                </div>    
            </div>
        </div>
        <!-- Recent Product End -->
         
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Entre em contato</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Bairro Nova esperança, Avenida Brasil, 418</p>
                                <p><i class="fa fa-envelope"></i>ricartesilvafotografo@gmail.com</p>
                                <p><i class="fa fa-phone"></i>74 98826-1256</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Siga-nos</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a target="_blanck" href="https://www.facebook.com/ricarte.silva.520"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blanck" href="https://www.instagram.com/ricarte_fotografo1/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" id="sobre">
                        <div class="footer-widget">
                            <h2>Sobre Nós</h2>
                            <ul>
                                <li><a href="#">Quem somos</a></li>
                                <p>Trabalhamos com cobertura de eventos como: <strong>Aniversário, Casamento, Show e Eventos em geral</strong></p>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>Aceitamos:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Area do administrador do sistema  -->
        <div style="text-align: center; margin:20px;">
            <?php if (isset($_SESSION['ADM'])): ?>
                <strong>Administrador logado: </strong> <?php echo $_SESSION['ADM']; ?> <a href="../controller/logout.php" style=" padding:3px; color:red; margin:2px; ">Sair</a>			
            <?php else: ?>
                <a href="login_adm/index.php" class="nav-item nav-link"><strong>Login administrador</strong></a>
            <?php endif; ?>
      
        </div> 
        <!-- fim da area do adm -->
        
         <!-- contador de visitas  -->
        <div class="top-bar" >
            <div class="container-fluid" style="margin:0px 40%;">
                <div class="row">
                    <div>
                        <img style="margin:10px 30%;" src="https://img.icons8.com/external-soft-fill-juicy-fish/60/000000/external-views-mobile-phones-soft-fill-soft-fill-juicy-fish.png"/><h4><?php echo ($conteudo);?> Visitas</h6> 
                    </div>    
                </div>
            </div>      
        </div>
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; Portal RS. Todos os Direitos reservados</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
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
