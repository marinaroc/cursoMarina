<?php

class ProdutoVO {
    private $codigo;
    private $tipo;
    private $nome;
    private $descricao;
    private $status;
    private $destaque;
    private $foto;
    
    public function setCodigo($p) {
        $this->codigo = trim($p);
        
    }       
    public function getCodigo() {
        return $this->codigo;
        
    }
    public function setTipo($p) {
        $this->tipo = trim($p);
    }
    public function getTipo() {
        return $this->tipo;
        
    }
    public function setNome($p) {
        $this->nome = trim($p);
        
    }
    public function getNome() {
        return $this->nome;
    }
    public function setDescricao($p) {
        $this->descricao = trim($p);
        
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function setStatus($p) {
        $this->status = trim($p);
    }
    public function getStatus() {
        return $this->status;
    }
    public function setDestaque($p) {
        $this->destaque = trim($p);
        
    }
    public function getDestaque() {
        return $this->destaque;
    }
    public function setFoto($p) {
        $this->foto = trim($p);
              
    }
    public function getFoto() {
        return $this->foto;
        
    }
          
}
