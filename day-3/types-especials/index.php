<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types Especials</title>
</head>

<body>
    <h1>Types Especials</h1>


    <?php
    $numbers = [1, 2, 3, 4];

    function multByTwo($n)
    {
        return ($n * 2);
    }

    $filtered_array = array_map('multByTwo', $numbers);

    echo "Vetor : $filtered_array"
    ?>
</body>

</html>