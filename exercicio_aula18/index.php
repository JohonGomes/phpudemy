<?php 
    //Exercício Aula 18 - Resolução Professor

    function potencia($numero, $elevado){
        $resultado = $numero;
        
        for($i = 1; $i < $elevado; $i++){
            $resultado = $resultado * $numero;
        }
        return $resultado;

    }

    echo "O resultado é : " . potencia(3,2);

?>