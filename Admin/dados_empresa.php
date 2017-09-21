<!DOCTYPE html>
<?php 
    require_once '../DAO/EmpresaDAO.php';
    require_once '_msg.php';
    $ret = '';
    $dao = new EmpresaDAO();
    if(isset($_POST['btnSalvar'])){
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sobre = $_POST['sobre'];
        
        $obj = new EmpresaVO();
        
        $obj->setEmail($email);
        $obj->setNome($nome);
        $obj->setSobre($sobre);
        
        
        $ret= $dao->GravarDadosEmpresa($obj);
    }
    
    
    $dados = $dao->ConsultarDadosEmpresa();
    
    $nome =$dados[0]['nome_empresa'];
    $email=$dados[0]['email_empresa'];
    $sobre=$dados[0]['sobre_empresa'];
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
                            <?php ExibirMsg($ret); ?>
                            <h2>Dados da empresa</h2>   
                            <h5>Gerencie seus dados</h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <form method="post" action="dados_empresa.php">
                    <div class="form-group">
                        <label>Nome</label>
                        <input class="form-control" name="nome" placeholder="Digite o nome" id="nome" value="<?= $nome ?>"/>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" name="email" placeholder="Digite o e-mail" id="email" value="<?= $email ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Sobre a empresa</label>
                        <textarea class="form-control" name="sobre" placeholder="Digite a descrição da empresa" id="descricao"><?= $sobre?></textarea>
                     </div>
                     
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return Validar()">Salvar</button>
                    </form>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <script>
            function Validar() {
                                if ($("#nome").val().trim() == '') {
                    alert("Favor inserir o nome");
                    $("#nome").focus();
                    return false;
                }
                if ($("#email").val().trim() == '') {
                    alert("Favor inserir o e-mail");
                    $("#email").focus();
                    return false;
                }
                if ($("#descricao").val().trim() == '') {
                    alert("Favor inserir a descricao");
                    $("#descricao").focus();
                    return false;
                }
                                
                
            }

        </script>
        
        


    </body>
</html>






