<?php
session_start();
include_once('../model/classes/conexao_db.php');

$id_img = filter_var( $_GET['id_imagem'], FILTER_SANITIZE_NUMBER_INT);
$caminho_img = filter_var( $_GET['caminho_img'], FILTER_SANITIZE_SPECIAL_CHARS);
    if( !isset( $id_img ) ):
        echo" <script>document.location.href='../view/cadastrar_img_aniversario.php'</script>";
        $_SESSION['MSG_DELETE'] = '<p style=" background-color:orange; padding:20px; text-align:center; font-size:15pt; color:white;">VAR ID imagem não encontrado</p>';
        exit;
    endif;

            $banco = conecta_banco(520); // chama a conexao com banco enviando o codigo, que eu criei, como parametro
            $sql = "DELETE FROM imagem_aniversario WHERE id_imagem ='$id_img' "; ///// apaga dados da tabela imagem

            
                if( $banco->exec($sql) ):
                    unlink('../view/'.$caminho_img); // chama funçao unlink para deletar img da pasta
                    $_SESSION['MSG_DELETE'] = '<p style=" background-color:green; padding:20px; text-align:center; font-size:15pt; color:white;">Imagem deletada com sucesso!</p>';
                    echo" <script>document.location.href='../view/galeria_aniversario.php'</script>";
                else:
                    $_SESSION['MSG_DELETE'] = '<p style=" background-color:orange; padding:20px; text-align:center; font-size:15pt; color:white;">Dados da Imagem com ID: '.$id_img.' não foi encontrado</p>';
                    echo" <script>document.location.href='../view/galeria_aniversario.php'</script>";   
                endif;        