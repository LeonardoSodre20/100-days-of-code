<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables part 2</title>
</head>

<body>
    <?php
    $first_name = "Leonardo";
    $age = 23;
    const COUNTRY = "Brasil";

    echo "Muito prazer, $first_name ! Você mora no " . COUNTRY;
    echo "<div>Idade : $age</div>"
    ?>


    <h1>

        <?php
        $number = 12;
        $number_two = 12;

        $total = $number + $number_two;
        $mult = $total * 2;
        $sub = $total - 10;
        $div = $total / 2;
        echo "Soma : $total";
        echo "<div>Multiplicação : $mult</div>";
        echo "<div>Divisão : $div</div>";
        echo "<div>Subtração : $sub</div>"
        ?>
    </h1>
</body>

</html>