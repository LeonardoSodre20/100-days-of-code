<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <link rel="stylesheet" href="index.css">
</head>

<?php
include_once('../connection.php');
?>

<body>
    <div>
        <h1 class="main-title">Lista de tarefas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-container">
            <input type="text" placeholder="Digite o nome da tarefa..." class="input-form" name="register">
            <?php
            if (isset($_POST['btn-submit-form'])) :

                $name = $_POST['register'];

                if ($name == '') :
                    echo "<span class='span-error'>O campo está vazio !!!</span>";
                else :
                    $result = mysqli_query($connection, "INSERT INTO tasks ($name) VALUES ('{$name}')");
                endif;
            endif;
            ?>
            <button type="submit" class="btn-submit" name="btn-submit-form">Adicionar</button>
        </form>


    </div>
</body>

</html>