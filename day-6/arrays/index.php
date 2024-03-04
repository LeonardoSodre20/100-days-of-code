<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day-6</title>
</head>
<body>
    <?php 
       $cars = array(0 =>'BMW', 1=>'Mercedez', 2=>'Cross Corolla');
       $cars[10] = 'Amarok';
       echo "O Carro é $cars[1]";
       print_r($cars);

       $clients = ['Leonardo', 'Alessandra', 'José'];
       $lastname = "Sodré";

       foreach($clients as $value) {
        echo "<span> Nome : $value </span>". $lastname;
       }
    ?>
</body>
</html>