<?php
function validar_campos($codigo){
    $empresa_depto = include(__DIR__ . '/../dados/empresa_depto.php');
    if(isset($empresa_depto[$codigo])){
        return true;
    }else{
        return 'Código da empresa não foi encontrado';
    }
}

