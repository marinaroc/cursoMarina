<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
	<?php include '_head.php';?> 
	<body>
    <div class="body-wrapper full-width-mode boxed-mode">
        <header id="header" class="header-container-wrapper">
            
            <?php include './_topo.php'; ?>
            <div class="navbg">
                <?php include '_menu.php';?>
               <div class="clear"></div>
            </div>
        </header><!-- END .header-container-wrapper -->

    <div class="content-wrapper">
        <div id="content" class="site-content">
            <div class="container">
                <div class="row row-wrapper">
                    <div class="row">
                        <div id="primary" class="content-area">
                            <div id="contact">
                                <div class="eight columns center">
                                    <div class="page-title">
                                        <h1 class="entry-title">
                                        Ficou alguma dúvida? Entre em contato conosco preenchendo o formulário abaixo:
                                        </h1>
                                        
                                    </div>                                       
                                    <form action="index.html" method="post" name="contact_form" id="contact_form">
                                        <div class="row">
                                            <div class="four columns b0">
                                                <div class="form-row field_text">
                                                    <input type="text" name="contact_name" value="" placeholder="Seu nome" id="contact_name" class="input_text required">
                                                </div>
                                            </div>
                                            <div class="four columns b0">
                                                <div class="form-row field_text">
                                                    <input type="text" name="contact_email" value="" placeholder="Seu email" id="contact_email" class="input_text required">
                                                </div>
                                            </div>
                                            <div class="four columns b0">
                                                <div class="form-row field_text">
                                                    <input type="text" name="contact_website" value="" placeholder="Seu telefone" id="contact_website" class="input_text">
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="form-row field_textarea">
                                            <textarea name="contact_message" placeholder="Digite sua mensagem aqui..." id="contact_message" class="input_textarea required"></textarea>
                                        </div>
                                        <div class="form-row field_submit">
                                            <input type="submit"  id="contact_submit" class="btn" value="ENVIAR">
                                        </div>
                                        <div class="form-row notice_bar">
                                                <p class="notice notice_ok hide">Thank you for contacting us. We will get back to you as soon as possible.</p>
                                                <p class="notice notice_error hide">Due to an unknown error, your form was not submitted. Please resubmit it or try later.</p>
                                        </div>
                                    </form> <!-- END #contact_form -->
                                 </div>
                            </div>
                        </div>
                    </div><!--.row -->
                </div><!--.row-wrapper -->
            </div><!-- .container -->
        </div><!-- #content -->
    </div><!-- #content-wrapper -->
		<?php include '_rodape.php'; ?>
    </div><!-- END .body_wrapper -->
		
</body>
</html>
