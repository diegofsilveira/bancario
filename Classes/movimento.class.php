<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of movimento
 *
 * @author Edicao
 */

require_once 'DBB/Database.php'; //Mysql/PDO
class movimento {
    //put your code here
    protected $DB;
    protected $connection;
    
    public function registrar($data){
        
        $pdo = $this->connection->prepare("INSERT INTO movimento (data,valor,id_conta) VALUES (NOW(),".$data['valor'].",".$data['conta'].")");
        return $pdo->execute();
        
    }
    
    function __construct() {
        //Faz a conexão com o banco de dados, e pega a instância do banco
        $this->DB =  Database::getInstance();
        $this->connection = $this->DB->getConnection();
        
        //Exemplo da utilização do pdo
        //$stmt = $this->connection->prepare("INSERT INTO pessoa (nome,endereco,cep,telefone,renda,situacao) VALUES ('Carol','Av Domingos Cazzotti', 14080130, '2121-1991', 999.90, 1)");
        //$stmt->execute();
    }
}

?>
