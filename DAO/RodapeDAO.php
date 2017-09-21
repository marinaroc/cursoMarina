<?php

require_once 'Conexao.php';
require_once '../VO/RodapeVO.php';


class RodapeDAO extends Conexao{
    /** @var PDO */
    
    private $conexao;
    
    /** @var PDOStatement*/
    private $sql;
    
    public function GravarTexto($texto) {
        if($texto == ''){
            return -100;
        }
        $this->conexao= parent::retornaConexao();
        $cod_empresa = 1;
        $comando = 'update tb_empresa SET texto_rodape = ? where id_empresa =?';
        
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $texto);
        $this->sql->bindValue(2,$cod_empresa);
        
        try {
            $this->sql ->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex ->getMessage();
            return -1;
            
        }
        
    }
    public function ConsultarTexto(){
        

        $this->conexao = parent::retornaConexao();
        
        $comando = 'select texto_rodape FROM tb_empresa';
        
        $this-> sql= $this->conexao->prepare($comando);
        
        $this-> sql ->setFetchMode(PDO::FETCH_ASSOC);
        
        $this-> sql ->execute();
        return $this->sql ->fetchAll();
    }
 
    
}
