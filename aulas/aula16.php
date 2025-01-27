<?php 
$num1 = 3;
$num2 = 4;

$resultado = 0;
for($i = 0; $i < 10; $i++ ){
    echo $i . "<br>";
}

$k = 0;
do{
    $k++;
} while($k < 10);

echo $k;


$k = 5;
while($k < 10){
    $k++;
    echo $k ."<br>";
}


//Definindo os Indíces
$lista = [
    1=> "Arroz",
    2=> "Feijão",
    3=> "Macarrão"
];

$nomes = ["João", "Maria", "Pedro", "Zé"];
var_dump($nomes);

for($k = 0; $k < 4; $k++){
    echo "<p>" . $nomes[$k] . "</p>";
}

foreach($nomes as $i => $n){
    echo "<p> O índice é: " . $i . " e o nome é: ". $n . "</p>";
}
?>