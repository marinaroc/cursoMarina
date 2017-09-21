<?php

require_once 'Conexao.php';
require_once '../VO/EmpresaVO.php';

class EmpresaDAO extends Conexao {

    /** @var PDO */
    private $conexao;

    /** @var PDOStatement */
    private $sql;

    public function GravarDadosEmpresa(EmpresaVO $obj) {
        if ($obj->getEmail() == '' || $obj->getNome() == '' || $obj->getSobre() == '') {
            return -100;
        }
        $cod_empresa = 1;
        //1ºpasso Resgatar a conexão
        $this->conexao = parent::retornaConexao();

        //2º passo Montar a instrução SQL
        $comando = 'update tb_empresa SET email_empresa = ?, nome_empresa = ?,sobre_empresa=? where id_empresa =?';

        //3º PASSO a atributo SQL deverá receber a conexao ja preparada para executar o comando

        $this->sql = $this->conexao->prepare($comando);

        //4º passo vincular os valores dos indices
        $this->sql->bindValue(1, $obj->getEmail());
        $this->sql->bindValue(2, $obj->getNome());
        $this->sql->bindValue(3, $obj->getSobre());
        $this->sql->bindValue(4, $cod_empresa);

        //5º Executar
        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function ConsultarDadosEmpresa(){
        

        $this->conexao = parent::retornaConexao();
        
        $comando = 'select email_empresa, nome_empresa, sobre_empresa FROM tb_empresa';
        
        $this-> sql= $this->conexao->prepare($comando);
        
        $this-> sql ->setFetchMode(PDO::FETCH_ASSOC);
        
        $this-> sql ->execute();
        return $this->sql ->fetchAll();
    }
    }
