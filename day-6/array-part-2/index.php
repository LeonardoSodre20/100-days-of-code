<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays part 2</title>
</head>
<body>
    <?php 
        $cars = ['Cruze', 'Hb20s', 'Gol', 'Fox'];

        $length_cars = count($cars);

        echo "Quantidade de carros em estoque: $length_cars";

        echo "<br/>";

        foreach($cars as $item) {
            echo $item . "<br/>";
        }

        echo "<br/>";

        // ARRAYS ASSOCIATIVOS

        $attrs = ['name' => 'Leonardo', 'age' => 23, 'lastname' => 'Sodré'];
        $attrs['city'] = 'Sorocaba - SP';

        print_r($attrs);

        echo "Valor do array : ". $attrs['name'];

        echo "<br/>";

        // ARRAYS MULTIDIMENSIONAIS

        $times = ['Cariocas' => 
        ['Flamengo', 'Vasco', 'Botafogo', 'Fluminense'], 
        'Paulistas' => 
        ['Palmeiras', 'Corinthians', 'São-Paulo', 'Santos'], 
        'Mineiros' => ['Atlético-MG', 'América-MG', 'Cruzeiro', 'Tombense']];
    
        echo "<br/>";

        foreach ($times['Paulistas'] as $item) {
            echo $item . "<br/>";
        }
        echo "<br/>";
        foreach ($times['Mineiros'] as $item) {
            echo $item . "<br/>";
        }
        echo "<br/>";
        foreach ($times['Cariocas'] as $item) {
            echo $item . "<br/>";
        }

    ?>
</body>
</html>