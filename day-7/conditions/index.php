<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <?php 
        $number = 10;
        $color = 'greeon';

        if($number == 10):
         echo 'Operação correta !!';
        endif;

        echo "<hr/>";

        switch($color):
            case "red":
                echo "Sua cor preferida é Vermelho";
            break;
            case "green":
                echo "Sua cor preferida é verde";
            break;

            default:
                echo "Ocorreu um erro !!!";
        endswitch
    ?>
</body>
</html>