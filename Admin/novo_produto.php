<!DOCTYPE html>
<?php 
require_once '../DAO/ProdutoDAO.php';
require_once '../VO/ProdutoVO.php';
require_once './_msg.php';

$ret = '';

if(isset($_POST['btnSalvar'])){
    
   $vo = new ProdutoVO();
   $dao = new ProdutoDAO();
   
   $vo->setDescricao($_POST['descricao']);
   $vo->setDestaque($_POST['destaque']);
   $vo->setNome($_POST['nome']);
   $vo->setStatus($_POST['status']);
   $vo->setTipo($_POST['tipo']);
   
   $foto = $_FILES['foto_produto'];
   
   $ret = $dao->InserirProduto($vo, $foto);          
    
}
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
                            <h2>Novo produto</h2>   
                            <h5>Cadastre seu produto.</h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="post" action="novo_produto.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" id="foto" name="foto_produto"/>
                    </div>
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" id="tipo" name="tipo">
                            <option value="">Selecione</option>
                            <option value="1">Prato</option>
                            <option value="2">Receita</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nome</label>
                        <input class="form-control" placeholder="Digite o nome" id="nome" name="nome"/>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textArea class="form-control" placeholder="Digite o descrição aqui" id="descricao" name="descricao"></textarea>
                     </div>
                     <div class="form-group">
                         <label>Status</label>
                         <select class="form-control" id="status" name="status">
                             <option value="">Selecione</option>
                             <option value="1">Ativo</option>
                              <option value="0">Inativo</option>
                                                
                            </select>
                     </div>
                    <div class="form-group">
                         <label>Destaque</label>
                         <select class="form-control" id="destaque" name="destaque">
                             <option value="">Selecione</option>
                             <option value="1">Sim</option>
                              <option value="0">Não</option>
                                                
                            </select>
                     </div>
                        <button type="submit" class="btn btn-success" onclick=" return Validar()" name="btnSalvar">Salvar</button>
                    </form>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <script>
            function Validar() {
                if ($("#foto").val().trim() == '') {
                    alert("Favor inserir a imagem do produto");
                    $("#foto").focus();
                    return false;
                }
                if ($("#tipo").val().trim() == '') {
                    alert("Favor selecionar o tipo");
                    $("#tipo").focus();
                    return false;
                }
                if ($("#nome").val().trim() == '') {
                    alert("Favor inserir o nome");
                    $("#nome").focus();
                    return false;
                }
                if ($("#descricao").val().trim() == '') {
                    alert("Favor inserir a descricao");
                    $("#descricao").focus();
                    return false;
                }
                if ($("#status").val().trim() == '') {
                    alert("Favor selecionar um status");
                    $("#status").focus();
                    return false;
                }
                if ($("#destaque").val().trim() == '') {
                    alert("Favor selecionar opção de destaque");
                    $("#destaque").focus();
                    return false;
                }
                
                
            }

        </script>
        
        


    </body>
</html>





