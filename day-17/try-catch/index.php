<?php 

class User {

    public function registerEmail($email) {
        try {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Este e-mail é inválido !! ");
            }else{
                echo "E-mail registrado com sucesso !!";
            }
        }catch(Exception $e) {
            echo $e->getMessage();
        }
    }
}

$user = new User();
$user->registerEmail('Leonardo@');