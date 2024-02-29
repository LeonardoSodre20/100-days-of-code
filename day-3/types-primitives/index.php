<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Types Primitives</title>
</head>

<body>
  <?php

  // 0x = hexadecimal 0b = binário 0 = octal
  $n = 300;

  echo "O valor da variável é $n"
  ?>

  <?php

  $v = 300;
  $typeof = var_dump($v);

  echo "<h1>Typeof $typeof</h1>"
  ?>

  <?php
  $b = (int) 34.5; // Coerção

  echo "Value : $b"
  ?>

  <?php
  $isTrue = true;

  echo "Value : $isTrue"
  ?>
</body>

</html>