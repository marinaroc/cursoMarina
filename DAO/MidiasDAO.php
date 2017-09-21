<?php

require_once 'Conexao.php';
require_once '../VO/RodapeVO.php';
class MidiasDAO extends Conexao {
    /** @var PDO */
    
    private $conexao;
    
    /** @var PDOStatement*/
    private $sql;
    public function GravarMidias (RodapeVO $obj){
        if ($obj->getFacebook() == '' || $obj->getInstagram() == '' || $obj->getLinkedin() == '') {
            return -100;
        }
        $this->conexao = parent::retornaConexao();
        $cod_empresa = 1;
        $comando = 'update tb_empresa SET link_facebook = ?, link_instagram = ?,link_linkedin =? where id_empresa =?';
        
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $obj ->getFacebook());
        $this->sql->bindValue(2, $obj->getInstagram());
        $this->sql->bindValue(3, $obj->getLinkedin());
        $this->sql->bindValue(4, $cod_empresa);
        
        try{
            $this->sql ->execute();
            return 1;
            
        } catch (Exception $ex){
            echo $ex ->getMessage();
            return -1;
        }
    }
     public function ConsultarMidias(){
        

        $this->conexao = parent::retornaConexao();
        
        $comando = 'select link_facebook, link_instagram, link_linkedin FROM tb_empresa';
        
        $this-> sql= $this->conexao->prepare($comando);
        
        $this-> sql ->setFetchMode(PDO::FETCH_ASSOC);
        
        $this-> sql ->execute();
        return $this->sql ->fetchAll();
    }
}
