<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulations strings</title>
</head>

<body>
    <h1>Hello World</h1>


    <?php
    // double quoted = "PHP \u{1F418}" => interpretado pela linguagem
    // single quoted = 'PHP /u{1F418}' => não há interpretação pela linguagem


    $name = 'Leonardo';
    const state = "SP";
    $nom = "Rodrigo";
    $snom = "Nogueira";

    echo "<h1>Meu nome é $name</h1>";
    echo "Moro em " . state;
    echo "Estamos no ano de " . date('Y');
    echo "$nom \"Minotauro\" $snom"; // SEQUEÊNCIA DE ESCAPE
    ?>
</body>

</html>