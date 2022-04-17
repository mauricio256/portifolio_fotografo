<?php
    session_start();
    include_once('conexao_db.php');
    $banco = conecta_banco(520); // chama a conexao com banco enviando o codigo, que eu criei, como parametro
  

    if( !isset($_POST['btn-cadastrar']) ):
        echo" <script>document.location.href='../view/index.php'</script>";
        exit;
    endif; 


    try{
        $SendCadImg = filter_input(INPUT_POST, 'btn-cadastrar', FILTER_SANITIZE_STRING);

        $arquivo = $_FILES['arquivo'];
        for ($cont = 0; $cont < count($arquivo['name']); $cont++) {
    
            $destinopasta = "../../view/aniversarios/" . $arquivo['name'][$cont];
            $destinobanco = "aniversarios/" . $arquivo['name'][$cont];
            $nome = $arquivo['name'][$cont];

            if (move_uploaded_file($arquivo['tmp_name'][$cont], $destinopasta)) {

                $query = "INSERT INTO imagem_aniversario (id_imagem, titulo, data_cadastro, caminho) VALUES (null, '$nome' , now(), '$destinobanco')";
                $banco->exec($query);

                $_SESSION['MSG_UPLOAD_IMG'] = '<p style=" background-color:green; padding:20px; text-align:center; font-size:15pt; color:white;">Imagem cadastrada com sucesso!</p>';
                echo" <script>document.location.href='../../view/cadastrar_img_aniversario.php'</script>";

            } else {
                $_SESSION['MSG_UPLOAD_IMG'] = '<p style=" background-color:red; padding:20px; text-align:center; font-size:15pt; color:white;">Imagem não pode ser cadastrada!</p>';
                echo" <script>document.location.href='../../view/cadastrar_img_aniversario.php'</script>";
            }
        }
    } catch (Exception $e) {
        /////echo $e->getMessage();
        $_SESSION['MSG_UPLOAD_IMG'] = '<p style=" background-color:red; padding:20px; text-align:center; font-size:15pt; color:white;">Uma imagem com titulo: <strong> '.$name.' </strong> já possui cadastro<br> tente um titulo diferente</p><br>'.$e->getMessage().'';
        echo" <script>document.location.href='../../view/cadastrar_img_aniversario.php'</script>";
    }     

?>

  