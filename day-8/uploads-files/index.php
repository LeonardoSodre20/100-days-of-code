<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>

    <style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
        gap: 1rem;
    }

    div {
        width: 500px;
    }

    label {
        background-color: #000;
        width: 100%;
        height: 50px;
        padding: 10px;
        cursor: pointer;
        color: #fff;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>

    <?php

    if (isset($_POST['submit-form'])) :
        $acceptExtensions = ['png', 'jpg', 'jpeg'];
        $extension = pathinfo($_FILES['register-file']['name'], PATHINFO_EXTENSION);

        if (in_array($extension, $acceptExtensions)) :
            $path_insert_file = "files/";
            $temporary = $_FILES['register-file']['tmp_name'];
            $new_name = uniqid() . $extension;

            if (move_uploaded_file($temporary, $path_insert_file . $new_name)) :
                $message = "Upload realizado com sucesso !";
            else :
                $message = "Erro, não foi possível fazer o upload";
            endif;
        else :
            $message = "Formato inválido !";
        endif;

        echo $message;
    endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div>
            <label for="file-input">File</label>
            <input type="file" name="register-file" id="file-input" hidden>
        </div>

        <button type="submit" name="submit-form">Submit</button>
    </form>
</body>

</html>