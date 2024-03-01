<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>

    <h1>Resultado : </h1>

    <?php
    $name = $_POST["name_register"] ?? "Sem nome";
    $email = $_POST["email_register"] ?? "Sem e-mail";

    foreach ($_POST as $value) {
        echo "<div><span>$value</span></div>";
    }

    ?>
</body>

</html>