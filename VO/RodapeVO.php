<?php


class RodapeVO {
    private $texto;
    private $facebook;
    private $linkedin;
    private $instagram;
    
    public function setTexto($p) {
        $this->texto = trim($p);
        
    }
    public function getTexto() {
        return $this->texto;
    }
    public function setFacebook($p) {
        $this->facebook = trim($p);
        
    }
    public function getFacebook() {
        return $this->facebook;
        
    }
    public function setLinkedin($p) {
        $this->linkedin = trim($p);
        
    }
    public function getLinkedin() {
        return $this->linkedin;
        
    }
    public function setInstagram($p) {
        $this->instagram = trim($p);
        
    }
    public function getInstagram() {
        return $this->instagram;
        
    }
            
}
