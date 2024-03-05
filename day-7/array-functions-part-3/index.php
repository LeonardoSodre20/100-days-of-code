<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array functions part 3</title>
</head>
<body>
    <?php 
    
        $names = ['Eu'=> 'Leonardo', 'Mae'=> 'Alessandra', 'Pai'=> 'José', 'Irma'=>'Eduarda'];

        $values = array_values($names);
        print_r($values);

        echo "<hr/>";

        $cars = ['BMW', 'Camaro', 'Mustang GT'];
        $motorcycles = ['XJ6', 'F800', 'R1'];

        $array_mescled = array_merge($cars, $motorcycles);
        print_r($array_mescled);

        echo "<hr/>";

        $remove_last_item_from_array = array_pop($cars);
        print_r($remove_last_item_from_array);

        echo "<hr/>";

        $first_item_from_array = array_shift($cars);
        print_r($first_item_from_array);
    ?>
</body>
</html>