<!DOCTYPE html>
<html lang="pt-BR">

<?php
require_once './connection.php';
session_start();

if (isset($_POST['button-submit'])) :
    $errors = [];
    $email = mysqli_escape_string($connect, $_POST['email_login']);
    $password = mysqli_escape_string($connect, $_POST['password_login']);

    if (empty($email) or empty($password)) :
        $errors[] = "<span>O e-mail e a senha são obrigatórios !</span>";
    endif;
endif;

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-container">
        <h1 class="main-title">Login</h1>

        <input type="text" placeholder="Digite seu e-mail..." class='inputs' name="email_login">
        <input type="password" placeholder="Digite sua senha..." class='inputs' name="password_login">

        <?php
        if (!empty($errors)) :
            foreach ($errors as $error) {
                echo $error;
            }
        endif;
        ?>

        <button type="submit" class="button-submit" name="button-submit">Entrar</button>
    </form>

</body>

</html>