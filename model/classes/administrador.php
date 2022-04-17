<?php
    include_once('conexao_db.php');

    class administrador{
        private $id_administrador = null;
        private $nome = null;
        private $usuario = null;
        private $senha = null;
        private $email = null;

        ///// contrutor da class
        public function __construct(){}


        //// metodos Set
        public function setId_administrador($id_administrador){
            $this->id_administrador = $id_administrador;
        } 
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        ///// metodos Get
        public function getId_administrador(){
            return $this->id_administrador;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function getEmail(){
            return $this->email;
        }

        public function login($user, $pass){

            $usuario =  filter_var($user, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $senha =  filter_var($pass, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

            try {
                $banco = conecta_banco(520); // chama a conexao com banco enviando o codigo, que eu criei, como parametro
                $query = $banco->query("SELECT * FROM administrador WHERE BINARY usuario = '$usuario' AND BINARY senha = '$senha' ");
                
                if( $query->fetch() ):
                    date_default_timezone_set('America/Sao_Paulo');
                    $Datetime = date('Y-m-d h:i:s', time()); /// pega hora do sistema e atribui a var datetime
                    $banco->query("UPDATE administrador SET ultimo_log = '".$Datetime."' WHERE  usuario = '".$usuario."' "); /// query q atualiza o campo ultimo log
                    
                    $query->execute();/// execulta a query
                    $row = $query->fetch(PDO::FETCH_ASSOC);

                    $this->setId_administrador($row['id_administrador']);
                    $this->setNome($row['nome']);
                    $this->setUsuario($row['usuario']);
                    $this->setSenha($row['senha']);
                    $this->setEmail($row['email']);

                    return true;
                else:
                  return false;        
                endif; 

                }catch(PDOException $e){
                    return $e->getMessage();    
            }
        
                 
        }



       
    }


    

?>