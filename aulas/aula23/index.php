<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 23</title>
</head>
<style>
        .error{
            color:red;
        }
    </style>
<body>
    <form action="" method="POST">
        <h1>Formulário com PHP</h1>

        Nome: <input type="text" name="nome"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        Comentário: <textarea name="comentario"></textarea><br><br>
        Genêro: <input type="radio" name="genero">Masculino<br><br>
        <input type="radio" name="genero">Feminino<br><br>
        <input type="radio" name="genero">Outro<br><br>

        <button type="submit">Enviar</button>

        <h2>Dados Enviados:</h2>

        <?php 
            

        ?>
    </form>
</body>
</html>