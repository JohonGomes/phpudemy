<?php 

    $email = $_POST['email'];
    $idade = intval($_POST['idade']);

    echo "O nome é: " . $_POST['nome'] . "<br>";
    echo "A idade é: " . $idade . "<br>";
    echo "O e-mail é: " . $email . "<br>";

?>