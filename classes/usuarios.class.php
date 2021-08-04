<?php

require_once 'conexao.class.php';
require_once 'funcoes.class.php';

class usuarios{

    // Atributos privados
    private $con;
    private $cpf;
    private $nome;;
    private $nasc;
    private $comum;
    private $cargo;
    private $perm;
    private $d_cad;
    private $status;

    //Chamando a conexao
    public function __construct(){
        $this->con = new conexao();
    }

    public function __set($atributo, $valor){
        $this->atributo = $valor;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    //Selecionando os dados
    public function select($dado){
        try{
            $query = $this->con->conectar()->prepare("SELECT * FROM 'usuarios'");
            $query->execute();
        }catch (PDOExcption $ex){
            return 'Error: '.$ex->getMessage();
        }
    }

    //Inserindo os dados
    public function insert($dado){
        try{
           $query = $this->con->conectar()->prepare("INSERT INTO 'usuarios' ('nome','comum','cargo') VALUES ()");
        }catch (PDOExcption $ex){

        }
    }

    //Atualizando os dados
    public function update($dado){
        try{

        }catch (PDOExcption $ex){
            
        }
    }

    //Deletando os dados
    public function delete($dado){
        try{

        }catch (PDOExcption $ex){
            
        }
    }

}
?>