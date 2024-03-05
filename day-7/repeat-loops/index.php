<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repeat Loops</title>
</head>
<body>
    <?php 
        $count = 1;

        while($count <=10):
            echo "Value : $count <br/>";
            $count++;
        endwhile;

        echo "<hr/>";

        $count = 1;
        do {
            echo "Value : $count <br/>";
            $count++;
        } while ($count <= 10)
    ?>
</body>
</html>