<?php

/*
    Classe de Conexão
*/
class conexao{

    // Atributos privados
    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private static $pdo;

    //
    public function __construct(){
        $this->servidor = "localhost";
        $this->banco = "sgccb";
        $this->usuario = "root";
        $this->senha = "";
    }

    //Método para conexão
    public function conectar(){
        try{
           $pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
            return $pdo;
        }catch(PDOException $erro){
            echo 'Error: '.$erro->getMessage();
        }
    }

}

?>