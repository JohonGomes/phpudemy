<?php
// Aula 17 Arrays

$lista = [1, 2, 3, 4, 5, 6];
var_dump($lista);

$lista[] = 7;
var_dump($lista);

//pop -> remove um item do array
//push -> adiciona um item do array

$nova_lista  = array_pop($lista);
echo "Removi o item $nova_lista do array";
var_dump($lista);

$nova = array_push($lista, 10);
echo "Adicionei um novo valor a lista de array";
var_dump($lista);
