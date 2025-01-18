<!-- Vocês devem implementar (em um arquivo index.php) uma calculadora que faz a conversão
de temperaturas de CELSIUS para FAHRENHEIT.
Você precisará de uma única variável para armazenar a temperatura em Celsius e depois
exibir o texto (com essa mesma formatação de exemplo):
A temperatura em Fahrenheit é: 32 °F
OBS:
Para converter graus Celsius em graus Fahrenheit, multiplique o valor em Celsius por 1,8
e some 32 ao resultado. -->

<div>
    <?php 
        $fahrenheit = (32 * 1.8) + 32;
    ?>
    <?php echo "A temperatura em Fahrenheit é: <b>". $fahrenheit . "</b>";?>
</div>