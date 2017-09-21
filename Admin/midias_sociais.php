<!DOCTYPE html>
<?php
require_once '../DAO/MidiasDAO.php';
require_once '_msg.php';

$ret = '';
if (isset($_POST['btnGravar'])) {
    $facebook = $_POST['link_facebook'];
    $linkedin = $_POST['link_linkedin'];
    $instagram = $_POST['link_instagram'];
    $dao = new MidiasDAO();

    $obj = new RodapeVO();

    $obj->setFacebook($facebook);
    $obj->setInstagram($instagram);
    $obj->setLinkedin($linkedin);


    $ret = $dao->GravarMidias($obj);
}
$dao = new MidiasDAO();
$dados = $dao->ConsultarMidias();

$facebook =$dados[0]['link_facebook'];
$linkedin =$dados[0]['link_instagram'];
$instagram=$dados[0]['link_linkedin'];
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
                            <h2>Midias Sociais</h2>   
                            <h5>Divulgue sua página.</h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="post" action="midias_sociais.php">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input class="form-control" name="link_facebook" placeholder="Digite o link aqui" value="<?= $facebook ?>" />
                        </div>
                        <div class="form-group">
                            <label>Linkedin</label>
                            <input class="form-control" name="link_linkedin" placeholder="Digite o link aqui" value="<?= $linkedin ?>" />
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input class="form-control" name="link_instagram" placeholder="Digite o link aqui" value="<?=$instagram ?>" />
                        </div>
                        <button type="submit" class="btn btn-success" name="btnGravar">Salvar</button>
                    </form>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>




    </body>
</html>





