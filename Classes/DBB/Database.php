<?php

class Database {

    protected static $_instance;
    protected $_connection;
    protected $_dns = 'mysql:host=localhost;dbname=bancario';
    protected $_username = 'root';
    protected $_password = '123';

    /**
    * Singleton pattern implementation makes "new" unavailable
    */
    protected function __construct()
    {
        $this->_connection = new PDO($this->_dns, $this->_username, $this->_password);
    }

    public function getConnection()
    {
        return $this->_connection;
    }

    public static function getInstance()
    {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    
    
    public function soma(){
        return '3';
    }
    
    
    
    
    
    /**
    * Singleton pattern implementation makes "clone" unavailable
    */
    protected function __clone()
    {}
}





?>
