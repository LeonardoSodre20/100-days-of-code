<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Validations</title>
    <style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
        width: 100%;
    }

    form {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        flex-direction: column;
        gap: 1rem;
    }

    #inputs {
        background-color: rgba(0, 0, 0, 0.10);
        outline: none;
        border: none;
        height: 35px;
        text-indent: 20px;
        width: 350px;
    }
    </style>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="register_age">Idade</label>
        <input type="text" name="register_age" id="inputs">

        <label for="register_email">E-mail</label>
        <input type="text" name="register_email" id="inputs">
        <button type="submit" name="submit_form">Enviar</button>
    </form>

    <?php
    if (isset($_POST['submit_form'])) :
        $errors = [];

        if (!$register_age = filter_input(INPUT_POST, 'register_age', FILTER_VALIDATE_INT)) :
            $errors[] = "Idade precisa ser um inteiro";
        endif;

        if (!$register_email = filter_input(INPUT_POST, 'register_email', FILTER_VALIDATE_EMAIL)) :
            $errors[] = "Digite um e-mail válido";
        endif;

        if (!empty($errors)) :
            foreach ($errors as $error) {
                echo "<span>$error</span>";
            }
        else :
            echo "Parabéns, seus dados estão corretos !!";
        endif;
    endif;
    ?>

</body>

</html>