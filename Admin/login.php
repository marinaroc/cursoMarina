<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php include '_head.php'; ?>
    <body>
        <div class="container">
            <div class="row text-center ">
                <div class="col-md-12">
                    <br /><br />
                    <h2> Painel: Restaurante</h2>
                </div>
            </div>
            <div class="row ">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>   Entre com os dados de sua conta </strong>  
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <br />
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Seu e-mail " id="email"/>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input type="password" class="form-control"  placeholder="Sua senha" id="senha" />
                                </div>


                                <button class="btn btn-primary " onclick="return Validar()">Acessar</button>


                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <script>
            function Validar() {
                if ($("#email").val().trim() == '') {
                    alert("Favor preencher e-mail");
                    $("#email").focus();
                    return false;
                }
                if ($("#senha").val().trim() == '') {
                    alert("Favor preencher senha");
                    $("#senha").focus();
                    return false;
                }
                
            }

        </script>




    </body>
</html>
