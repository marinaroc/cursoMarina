<?php
    function ExibirMsg($ret){
        if($ret == -100){
            echo '<div class="alert alert-warning">
                                Preencher campo(s) obrigatório(s).
                  </div>';
            
        }else if($ret== 1){
            echo '<div class="alert alert-success">
                                Dados gravados com sucesso.
                  </div>';
            
        }else if($ret== -1){
            echo '<div class="alert alert-danger">
                                Ocorreu um erro na opração. Tente mais tarde.
                  </div>';
        }else if($ret == -101){
            echo '<div class="alert alert-warning">
                                Selecione uma foto.
                  </div>';
            
        }else if($ret == -102){
            echo '<div class="alert alert-warning">
                                Formato incorreto. Favor inserir uma foto no formato JPG.
                  </div>';
            
        }else if($ret == 2){
            echo '<div class="alert alert-success">
                                Foto excluída com sucesso.
                  </div>';
            
        }
        
    }
?>

