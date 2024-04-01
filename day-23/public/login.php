<?php

defined('CONTROL') or die('Ops.. Acesso negado !!');


// VERIFICA SE O FORMS FOI ENVIADO
if ($_SESSION['REQUEST_METHOD'] == 'POST') {
  // VERIFICA SE O USUARIO E A SENHA FORAM ENVIADOS
  $user = $_POST['user'] ?? null;
  $password = $_POST['password'] ?? null;
  $error = null;

  if (empty($user) || empty($password)) {
    $error = 'Usuário e senha são obrigatórios!';
  }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login em PHP</title>
  <link rel="stylesheet" href="../styles/index.css">
</head>

<body>
  <form action="index.php?route=login" method="post" id='forms-login'>
    <h1>Login</h1>

    <div id='container-login'>
      <label for="user-login" id='label-login'>E-mail</label>
      <input name='user' id='input-login' />
    </div>

    <div id='container-login'>
      <label for="user-login" id='label-login'>Senha</label>
      <input name='password' type="password" id='input-login' />
    </div>

    <button type="submit" id='button-submit'>Entrar</button>
  </form>

  <?php if (!empty($error)): ?>
    <p style="color: red">
      <?= $error ?>
    </p>
  <?php endif; ?>
</body>

</html>