<?php

class FotoVO {
  
  private $caminho;
  
  public function getNome() {
      return md5(microtime());
      
  }
  public function setCaminho($p) {
      $this->caminho = trim($p);
      
  }
  public function getCaminho() {
      return $this->caminho;
      
  }
}
