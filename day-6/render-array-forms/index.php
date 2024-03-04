<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add in List</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="main-container">
      <h1 class="main-title">Lista de carros</h1>
      <form method="post" class="form-container">
        <input
          type="text"
          name="register-name"
          class="register-input"
          placeholder="Digite o nome do carro..."
        />
        <button class="button-submit">Add in list</button>

      </form>

      <?php 
        $array_forms = $_POST;
        var_dump($array_forms);
      ?>
    </section>


  </body>
</html>
