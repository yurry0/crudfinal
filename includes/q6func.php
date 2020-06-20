<?php

    //funcao para calcular desconto
    
    function calcular_desconto($produto_valor, $desc){

        $valor_desconto = $produto_valor * ($desc/100);
        $valor_final = $produto_valor - $valor_desconto;
        return number_format($valor_final,2) ;

    }


?>