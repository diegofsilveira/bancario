<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'DBB/Database.php'; //Mysql/PDO


class Pessoa {
    
    protected $nom_pessoa;
    protected $end_pessoa;
    protected $cep_pessoa;
    protected $tel_pessoa;
    protected $renda_pessoa;
    protected $sit_pessoa;
    protected $DB;
    protected $connection;

    function __construct() {
        //Faz a conex�o com o banco de dados, e pega a inst�ncia do banco
        $this->DB =  Database::getInstance();
        $this->connection = $this->DB->getConnection();
        
        
        //Exemplo da utiliza��o do pdo
        //$stmt = $this->connection->prepare("INSERT INTO pessoa (nome,endereco,cep,telefone,renda,situacao) VALUES ('Carol','Av Domingos Cazzotti', 14080130, '2121-1991', 999.90, 1)");
        //$stmt->execute();
    }
    
    
    
    //Fun��o para verificar quais contas o usu�rio t�m (Conta comum, ou conta poupan�a, ou conta especial)
    public function totalContas(){
        
    }
    
    
    public function selecionar($id){
        return $this->connection->query('SELECT * FROM Pessoa WHERE id = ' . $id);
    }
    
    
    public function inserir(){
        
    }
    
    
    public function listar(){
        
        
    }
    
    public function excluir($id){
        
        
    }
    
    public function atualizar($id){
        
        
    }
    
    
    public function setNome($nome) {
        $this->nom_pessoa = $nome;
    }

    public function setEndereco($endereco) {
        $this->end_pessoa = $endereco;
    }

    public function setCep($cep) {
        $this->cep_pessoa = $cep;
    }

    public function setTelefone($telefone) {
        $this->tel_pessoa = $telefone;
    }

    public function setRenda($renda) {
        $this->renda_pessoa = $renda;
    }

    public function setSituacao($situacao) {
        $this->sit_pessoa = $situacao;
    }

    public function getSituacao() {
        return $this->sit_pessoa;
    }

    public function getRenda() {
        return $this->renda_pessoa;
    }

    public function getTelefone() {
        return $this->tel_pessoa;
    }

    public function getCep() {
        return $this->cep_pessoa;
    }

    public function getNome() {
        return $this->nom_pessoa;
    }

    public function getEndereco() {
        return $this->end_pessoa;
    }

}

?>
