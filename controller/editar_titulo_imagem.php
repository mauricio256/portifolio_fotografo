<?php
session_start();
include_once('../model/classes/conexao_db.php');

$id_img = filter_var( $_GET['id_imagem'], FILTER_SANITIZE_NUMBER_INT);
$newtitle = filter_input(INPUT_GET, 'titulo', FILTER_SANITIZE_STRING);

    if( !isset( $id_img ) ):
        echo" <script>document.location.href='../view/index.php'</script>";
        $_SESSION['MSG_DELETE'] = '<p style=" background-color:orange; padding:20px; text-align:center; font-size:15pt; color:white;">VAR ID imagem não encontrado</p>';
        exit;
    endif;

            $banco = conecta_banco(520); // chama a conexao com banco enviando o codigo, que eu criei, como parametro
            $sql = "UPDATE imagem SET titulo = '$newtitle' WHERE id_imagem = '$id_img' "; ///// apaga dados da tabela imagem

            
                if( $banco->exec($sql) ):
                    $_SESSION['MSG_DELETE'] = '<p style=" background-color:green; padding:20px; text-align:center; font-size:15pt; color:white;">Novo titulo salvo com sucesso!</p>';
                    echo" <script>document.location.href='../view/index.php'</script>";
                else:
                    $_SESSION['MSG_DELETE'] = '<p style=" background-color:orange; padding:20px; text-align:center; font-size:15pt; color:white;">Dados da Imagem com ID: '.$id_img.' não foi encontrado ou titulo já existe na imagem</p>';
                    echo" <script>document.location.href='../view/index.php'</script>";   
                endif;        