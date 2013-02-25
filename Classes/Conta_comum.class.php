<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'DBB/Database.php'; //Mysql/PDO

class conta_comum {
    protected $DB;
    protected $connection;
    
    public function extrato($id, $from, $perpage){
        
        $movimento =  $this->connection->query("SELECT * FROM movimento WHERE id_conta = " . $id . " LIMIT $from , $perpage");
        return $movimento->fetchAll(PDO::FETCH_ASSOC);
        
    }
    
    public function totalMovimento($id){
        
        $movimento =  $this->connection->query("SELECT count(*) AS total FROM movimento WHERE id_conta = " . $id);
        return $movimento->fetch(PDO::FETCH_ASSOC);
        
    }
    
    
    public function encerrar(){
        
        
    }
    
    public function depositar($data){
        //(array)$data(id + o valor para o depósito)
        
        try {
            
            $saldo = $this->connection->query("SELECT saldo FROM conta_comum WHERE numero = " . $data['conta']);
            $saldo = $saldo->fetch(PDO::FETCH_ASSOC);
            $saldo = $saldo['saldo'];
            
            
            $pdo = $this->connection->prepare('UPDATE conta_comum SET saldo = ' . ($data['valor'] + $saldo) . 'WHERE numero = ' . $data['conta'] );
            return $pdo->execute();
            
        // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            
            return "Erro: " . $ex->getMessage();
        }
        
    }
    
    public function sacar($data){
        //(array)$data(id + o valor para o depósito)
        
        try {
            
            $saldo = $this->connection->query("SELECT saldo FROM conta_comum WHERE numero = " . $data['conta']);
            $saldo = $saldo->fetch(PDO::FETCH_ASSOC);
            $saldo = $saldo['saldo'];
            
            
            $pdo = $this->connection->prepare('UPDATE conta_comum SET saldo = ' . ($saldo + $data['valor']) . 'WHERE numero = ' . $data['conta'] );
            return $pdo->execute();
            
        // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            
            return "Erro: " . $ex->getMessage();
        }
        
    }
    
    public function Saldo($id){
        
        return $this->connection->query("SELECT saldo FROM conta_comum WHERE numero = " . $id);
        
    }
    
    
    //Mostra as contas comuns de um determinado usuário
    public function listar($idUsuario){
        
        return $this->connection->query("SELECT * FROM conta_comum WHERE id_pessoa = " . $idUsuario);
        
    }
    
    //Abre a conta para um usuário pré determinado
    public function abrir_conta($data){
        
        try {
            
            $pdo = $this->connection->prepare("INSERT INTO conta_comum (abertura,situacao,senha,saldo,id_pessoa) VALUES (NOW(),1,".$data['senha'].",".$data['saldo'].", ".$data['id'].")");
            return $pdo->execute();
            
            
        // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            
            return "Erro: " . $ex->getMessage();
        }
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
