<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array functions</title>
</head>
<body>
    <?php 
        $names = ['Leonardo', 'Alessandra', 'Eduarda', 'José'];
        $name = 'Leonardo';

        if(is_array($names)):
            echo "Esse item é um array";
        else:
            echo "Esse item não um é array";
        endif;

        echo "<hr/>";

        if(in_array('Leonardo', $names)):
            echo "Item existe no array !";
        else: 
            echo "Item não existe no array !";
        endif;

        echo "<hr/>";

        $times = ['Palmeiras', 'Flamengo', 'Fluminense', 'Palmeiras'];

        $keys_from_array = array_keys($times);

        print_r($keys_from_array);

        echo "<hr/>";

        $filtered_array = array_filter($times, function($value) {
            $values_filter = $value == 'Palmeiras';
            return $values_filter;
        });

        print_r($filtered_array);

    ?>
</body>
</html>