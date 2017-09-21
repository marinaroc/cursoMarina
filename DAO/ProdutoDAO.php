<?php

require_once 'Conexao.php';
require_once '../VO/ProdutoVO.php';

class ProdutoDAO extends Conexao {

    /** @var PDO */
    private $conexao;

    /** @var PDOStatement */
    private $sql;

    public function InserirProduto(ProdutoVO $obj, $foto) {
        if ($obj->getDescricao() == '' || $obj->getDestaque() == '' || $foto['tmp_name'] == '' || $obj->getNome() == '' || $obj->getStatus() == '' || $obj->getTipo() == '') {
            return -100;
        }
        if ($foto ['type'] != 'image/jpeg'){
            return -102;
        }
        $cod_empresa = 1;
        $nome_foto = md5(microtime()) . '.jpg';
        //1ºpasso Resgatar a conexão
        $this->conexao = parent::retornaConexao();

        //2º passo Montar a instrução SQL
        $comando = 'insert into tb_produto (foto_produto,tipo_produto, nome_produto, descricao_produto, status_produto,destaque_produto, id_empresa) VALUES (?,?,?,?,?,?,?)';

        //3º PASSO a atributo SQL deverá receber a conexao ja preparada para executar o comando

        $this->sql = $this->conexao->prepare($comando);
        //4º passo vincular os valores dos indices
        $this->sql->bindValue(1, $nome_foto);
        $this->sql->bindValue(2, $obj->getTipo());
        $this->sql->bindValue(3, $obj->getNome());
        $this->sql->bindValue(4, $obj->getDescricao());
        $this->sql->bindValue(5, $obj->getStatus());
        $this->sql->bindValue(6, $obj->getDestaque());
        $this->sql->bindValue(7, $cod_empresa);
        //5º Executar
        try {
            $this->sql->execute();
            
            move_uploaded_file($foto['tmp_name'], '../Site/Fotos/' . $nome_foto);
            return 1;
        } catch (Exception $ex) {
            // echo $ex->getMessage();
            return -1;
        }
    }
    
    public function ConsultarProduto() {
        
        $this->conexao = parent::retornaConexao();
        
        $comando = 'SELECT id_produto,tipo_produto,nome_produto,descricao_produto,foto_produto, status_produto,destaque_produto FROM tb_produto';
        
        $this->sql = $this->conexao->prepare($comando);
        
        $this->sql->setFetchMode(PDO::FETCH_ASSOC);
        
        $this->sql->execute();
        
        return $this->sql->fetchAll();
              
        //Fazer Excluir FotoProduto e Alterar produto
        
    }
}
