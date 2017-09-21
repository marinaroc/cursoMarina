<!DOCTYPE html>
<?php
require_once '../DAO/RodapeDAO.php';
require_once '_msg.php';
$ret = '';
$dao = new RodapeDAO();
if (isset($_POST['btnSalvar'])) {

    $texto = $_POST['texto'];


    $ret = $dao->GravarTexto($texto);
}


$dados = $dao->ConsultarTexto();

$texto = $dados[0]['texto_rodape'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php include '_head.php'; ?>
    <body>
        <div id="wrapper">
            <?php
            include '_topo.php';
            include '_menu.php';
            ?>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <?php ExibirMsg($ret) ?>
                            <h2>Rodapé</h2>   
                            <h5>Gerencie aqui o texto do rodapé.</h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="post" action="rodape.php">
                        <div class="form-group">
                            <label>Texto</label>
                            <input class="form-control" name="texto" placeholder="Digite o texto rodapé" value="<?= $dados [0]['texto_rodape'] ?>"/>
                        </div>
                        <button type="submit" class="btn btn-success" name="btnSalvar">Salvar</button>
                    </form>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>




    </body>
</html>





