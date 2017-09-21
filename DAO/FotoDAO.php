<?php

require_once 'Conexao.php';

class FotoDAO extends Conexao {

    /** @var PDO */
    private $conexao;

    /** @var PDOStatement */
    private $sql;

    public function GravarFoto($foto, $tipo) {
        if ($foto['tmp_name'] == '') {
            return -101;
        }
        if ($foto ['type'] != 'image/jpeg') {
            return -102;
        }
        $this->conexao = parent::retornaConexao();

//Foto banner
        if ($tipo == 1) {
            $comando = 'UPDATE tb_empresa set foto_banner = ? WHERE id_empresa =?';
        } else if ($tipo == 2) { //Foto empresa
            $comando = 'UPDATE tb_empresa set foto_empresa = ? WHERE id_empresa =? ';
        } else if ($tipo == 3) { //fOTO logo
            $comando = 'UPDATE tb_empresa set foto_logo = ? WHERE id_empresa =?';
        } else if ($tipo == 4) {//Foto principal 1
            $comando = 'UPDATE tb_empresa set foto_principal1 =? WHERE id_empresa =?';
        } else if ($tipo == 5) {//Foto principal 2
            $comando = 'UPDATE tb_empresa set foto_principal2 =? WHERE id_empresa =?';
        }

        $this->sql = $this->conexao->prepare($comando);

        $cod_empresa = 1;

        $nome_foto = md5(microtime()) . '.jpg';

        $this->sql->bindValue(1, $nome_foto);
        $this->sql->bindValue(2, $cod_empresa);

        try {
            $this->sql->execute();

            move_uploaded_file($foto['tmp_name'], '../Site/Fotos/' . $nome_foto);

            return 1;
        } catch (Exception $ex) {
            return -1;
        }
    }

    public function ConsultarFoto($tipo) {
        $this->conexao = parent::retornaConexao();

        //Foto banner
        if ($tipo == 1) {
            $comando = 'SELECT foto_banner from tb_empresa';
        } else if ($tipo == 2) { //Foto empresa
            $comando = 'SELECT  foto_empresa from tb_empresa ';
        } else if ($tipo == 3) { //fOTO logo
            $comando = 'SELECT  foto_logo from tb_empresa';
        } else if ($tipo == 4) {//Foto principal 1
            $comando = 'SELECT  foto_principal1 from tb_empresa';
        } else if ($tipo == 5) {//Foto principal 2
            $comando = 'SELECT foto_principal2 from tb_empresa';
        }
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->setFetchMode(PDO::FETCH_ASSOC);
        $this->sql->execute();

        return $this->sql->fetchAll();
    }

    public function ExcluirFoto($tipo, $nome_foto) {
        $this->conexao = parent::retornaConexao();
        
        //Foto banner
        if ($tipo == 1) {
            $comando = 'UPDATE tb_empresa set foto_banner = null WHERE id_empresa =?';
        } else if ($tipo == 2) { //Foto empresa
            $comando = 'UPDATE tb_empresa set foto_empresa = null WHERE id_empresa =? ';
        } else if ($tipo == 3) { //fOTO logo
            $comando = 'UPDATE tb_empresa set foto_logo = null WHERE id_empresa =?';
        } else if ($tipo == 4) {//Foto principal 1
            $comando = 'UPDATE tb_empresa set foto_principal1 = null WHERE id_empresa =?';
        } else if ($tipo == 5) {//Foto principal 2
            $comando = 'UPDATE tb_empresa set foto_principal2 = null WHERE id_empresa =?';
        }
        $cod_empresa = 1;

        $this->sql = $this->conexao->prepare($comando);

        $this->sql->bindValue(1, $cod_empresa);

        try {
            $this->sql->execute();
            unlink('../Site/Fotos/' . $nome_foto);

            return 2;
        } catch (Exception $ex) {
            return -1;
        }
    }

}
//QUARTA: Entregar os arquivos finalizados: foto logo, principal 1 e 2 (PAGE)
// Terca: Tema TCC
