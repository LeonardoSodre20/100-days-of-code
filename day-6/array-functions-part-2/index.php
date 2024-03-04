<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array part 2</title>
</head>
<body>
    <?php 
        $frutas = ['a' => 'Laranja', 'b' => 'Banana', 'c', 'Melância'];
        $asc_array = ksort($frutas);

        foreach($frutas as $key => $value) {
            echo "$key = $value\n";
        }

        echo "<hr/>";

        $fruits_other = array("lemon", "orange", "banana", "apple");
        sort($fruits_other);
        foreach ($fruits_other as $key => $val) {
            echo "fruits[" . $key . "] = " . $val . "\n";
        }

        echo "<hr/>";

        for ($value = 0; $value <= count($fruits_other); $value++) {
            echo "Value : $value" . "<br/>";
        }
    ?>
</body>
</html>