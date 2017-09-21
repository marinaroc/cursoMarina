<!DOCTYPE html>
<?php
require_once '../DAO/FotoDAO.php';
require_once '_msg.php';
$ret = '';
$tipo = 4;
$dao = new FotoDAO();
if (isset($_POST['btnSalvar'])) {

    $foto = $_FILES['foto_principal1'];
    $ret = $dao->GravarFoto($foto, $tipo);
} else
if (isset($_POST['btnExcluir'])) {
    $nome_foto = $_POST['nome_foto'];
    $ret = $dao->ExcluirFoto($tipo, $nome_foto);
}
$dados = $dao->ConsultarFoto($tipo);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php include '_head.php'; ?>
    <body>
        <div id="wrapper">
            <?php include '_topo.php';
            include '_menu.php';
            ?>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <?= ExibirMsg($ret) ?>
                            <h2>Foto do principal</h2>   
                            <h5>Gerencie aqui sua primeira foto principal.</h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="post" action="foto_principal1.php" enctype="multipart/form-data">
                        <input type="hidden" name="nome_foto" value="<?= $dados[0]['foto_principal1'] ?>">
<?php if ($dados[0]['foto_principal1'] == '') { ?>
                                <div class="form-group">
                                    <label>Foto Principal</label>
                                    <input type="file" name="foto_principal1"/>

                                </div>
                                <button type="submit" class="btn btn-success" name="btnSalvar">Salvar</button>
<?php } else { ?>
                                <img src="../Site/Fotos/<?= $dados[0]['foto_principal1'] ?>" width="350px">
                                    <br><br>
                                            <button type="submit" class="btn btn-danger" name="btnExcluir">Excluir</button>
<?php } ?>
                                        </form>
                                        </div>
                                        <!-- /. PAGE INNER  -->
                                        </div>
                                        <!-- /. PAGE WRAPPER  -->
                                        </div>




                                        </body>
                                        </html>



