<?php
    if($_POST['nome'] != ''):
    echo "<pre>";
        print_r($_POST);
    echo "</pre>";
    else:
        echo "Nenhuma informação Enviada pelo formulário";
    endif;
?>