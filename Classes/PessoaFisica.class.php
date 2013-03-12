<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PessoaFisica extends Pessoa{
    
    protected $DB;
    protected $connection;
    
    
    function __construct() {
        $this->DB =  Database::getInstance();
        $this->connection = $this->DB->getConnection();
    }
    
    public function teste(){
        return 'teste...';
    }

}

?>
