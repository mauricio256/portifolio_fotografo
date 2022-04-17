<?php
    include_once('conexao_db.php');
    session_start();

    if( !isset($_POST['btn-cadastrar']) ):
        echo" <script>document.location.href='../view/index.php'</script>";
        exit;
    endif; 
    
    $titulo = filter_input(INPUT_POST, 'titulo_img', FILTER_SANITIZE_SPECIAL_CHARS);
  
    if(isset($_FILES['pic'])){

        $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
        $new_name = $titulo.$ext; //Definindo um novo nome para o arquivo
        $dir = '../../view/trabalhos_recentes/'; //Diretório para uploads 
        
        $banco = conecta_banco(520); // chama a conexao com banco enviando o codigo, que eu criei, como parametro
        $query = "INSERT INTO imagem (id_imagem, titulo, data_cadastro, caminho) VALUES (NULL,'$titulo',now(), 'trabalhos_recentes/$titulo$ext')";
        
        try {

            if($banco->exec($query)):  
                move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
                $_SESSION['MSG_UPLOAD_IMG'] = '<p style=" background-color:green; padding:20px; text-align:center; font-size:15pt; color:white;">Imagem cadastrada com sucesso!</p>';
                echo" <script>document.location.href='../../view/cadastrar_img.php'</script>";
            else:
                $_SESSION['MSG_UPLOAD_IMG'] = '<p style=" background-color:red; padding:20px; text-align:center; font-size:15pt; color:white;">Imagem não pode ser cadastrada!</p>';
                echo" <script>document.location.href='../../view/cadastrar_img.php'</script>";
            endif;
     
        } catch (Exception $e) {
            /////echo $e->getMessage();
            $_SESSION['MSG_UPLOAD_IMG'] = '<p style=" background-color:red; padding:20px; text-align:center; font-size:15pt; color:white;">Uma imagem com titulo: <strong> '.$titulo.' </strong> já possui cadastro<br> tente um titulo diferente</p>';
            echo" <script>document.location.href='../../view/cadastrar_img.php'</script>";
        }
       
    } 
  
?>

  