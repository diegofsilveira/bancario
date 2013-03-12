<?php

require 'Conta_comum.class.php';

class conta_especial extends conta_comum {
    
    protected $limite_conta;
    
    public function setLimite($limite) {
        $this->limite_conta = $limite;
    }

    public function getLimite() {
        return $this->limite_conta;
    }
    
    
    
}


?>
