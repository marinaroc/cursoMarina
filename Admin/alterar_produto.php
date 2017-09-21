<!DOCTYPE html>
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
                            <h2>Alterar produto</h2>   
                            <h5>Altere seu produto.</h5>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" id="foto" />
                    </div>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                    <hr>
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" id="tipo">
                            <option value="">Selecione</option>
                            <option value="1">Prato</option>
                            <option value="2">Receita</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nome</label>
                        <input class="form-control" placeholder="Digite o nome" id="nome" />
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textArea class="form-control" placeholder="Digite o link aqui" id="descricao"></textarea>
                     </div>
                     <div class="form-group">
                         <label>Status</label>
                          <select class="form-control" id="status">
                             <option value="">Selecione</option>
                             <option value="1">Ativo</option>
                              <option value="0">Inativo</option>
                                                
                            </select>
                     </div>
                    <div class="form-group">
                         <label>Destaque</label>
                          <select class="form-control" id="destaque">
                             <option value="">Selecione</option>
                             <option value="1">Sim</option>
                              <option value="0">Não</option>
                                                
                            </select>
                     </div>
                        <button type="submit" class="btn btn-success" onclick="Validar()">Salvar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                    
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





