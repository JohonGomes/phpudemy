<div>
    <p>O seu IMC está na faixa da:
        <b>
            <?php
            $altura = 1.75;
            $peso = 80;
            $imc = $peso / ($altura * $altura);

            $faixa = "Você está na faixa: ";

            if ($imc < 18.5) {
                echo $faixa . "MAGREZA";
            } elseif ($imc >= 18.5 && 24.9) {
                echo $faixa . "NORMAL";
            } elseif ($imc > 24.9 && 30) {
                echo $faixa . " SOBREPESO";
            } else {
                echo $faixa . "OBESIDADE ";
            }
            ?>
        </b>
    </p>
    <br>
    <?php echo " O seu IMC é :" . $imc; ?>
</div>