<!DOCTYPE html>
<?php
require_once '../DAO/ProdutoDAO.php';

$dao = new ProdutoDAO();
$produtos = $dao->ConsultarProduto();
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
                            <h2>Consultar Produto</h2>   
                            <h5>Consulte/altere seu produto.</h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />

                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Produtos cadastrados
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Foto</th>
                                                    <th>Nome</th>
                                                    <th>Descrição</th>
                                                    <th>Tipo</th>
                                                    <th>Status</th>
                                                    <th>Destaque</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for($i=0; $i<count($produtos); $i++){ ?>
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <img src="../Site/Fotos/<?=$produtos[$i]['foto_produto'] == '' ? 'sem_foto.gif':$produtos[$i]['foto_produto'] ?>" width="80px"
                                                        
                                                    </td>
                                                    <td><?= $produtos[$i] ['nome_produto'] ?></td>
                                                    <td><?= $produtos[$i]['descricao_produto']?></td>
                                                    <td><?= $produtos[$i]['tipo_produto'] == 1 ?'Prato' :'Receita' ?></td>
                                                    <td><?= $produtos[$i]['status_produto'] == 1 ? 'Ativo' : 'Inativo'?></td>
                                                    <td><?= $produtos[$i]['destaque_produto'] == 1? 'Sim' : 'Não'?></td>
                                                    <td><a href="alterar_produto.php?cod=<?php $produtos[$i]['id_produto'] ?>" class="btn btn-warning">Alterar</a></td>
                                                </tr>
                                                
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

 


    </body>
</html>





