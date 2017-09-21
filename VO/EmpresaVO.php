<?php

class EmpresaVO {
    private $nome;
    private $email;
    private $sobre;
    
    public function setNome($p) {
        $this->nome = trim($p);
                
    }
    public function getNome() {
        return $this->nome;
        
    }
    public function setEmail($p) {
        $this->email = trim($p);
        
    }
    public function getEmail() {
        return $this->email;
        
    }
    public function setSobre($p) {
        $this->sobre = trim($p);
        
    }
    public function getSobre() {
        return $this->sobre;
    }
         
}
