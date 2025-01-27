<?php 
    // Aula 18 Funções

    function gerarNumeros($inicio = 10 , $fim = 25 ){
        $lista = [];
        if($fim <= $inicio){
            echo "Não dá pra continuar";
        } else {
            for ($k = $inicio; $k <= $fim; $k++){
                $lista[] = $k;
            }
        }
        return $lista;
    }

    var_dump($var1 = gerarNumeros(1,6));

    var_dump($var2 = gerarNumeros(1,12)); 
    
    var_dump($var3 = gerarNumeros()); //usa os valores padrões definidos na função
?>