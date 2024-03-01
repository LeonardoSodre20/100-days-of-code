<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Convertion of Temperature</title>
</head>

<body>
    <h1>Conversor de temperatura</h1>

    <form class="form-register" method="post">
        <input type="number" placeholder="Digite a temperatura (C °)" name="register_temperature" class="input-register" />
        <button class="button-convert" type="submit">Converter</button>
    </form>

    <?php

    if ($_POST) {
        $temp = $_POST['register_temperature'];
        $convert_calc = (int) $temp * 1.8 + 32;

        echo "<h1>A temperatura convertida para Fahrenheit é : $convert_calc F</h1>";
    }

    ?>

</body>

</html>