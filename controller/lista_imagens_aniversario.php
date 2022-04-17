<?php
include_once('../model/classes/conexao_db.php');

    try {
        $banco = conecta_banco(520); // chama a conexao com banco enviando o codigo, que eu criei, como parametro
        $sql = 'SELECT * FROM imagem_aniversario';    
    }catch(PDOException $e){
        return $e->getMessage();    
    } 