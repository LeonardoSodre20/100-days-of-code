<?php 

class Login {
    public static $user;

    public static function verifyLogin() {
        echo "O usuário " . self::$user . " está logado !!";
    }

    public function Logout($isAuth) {
        if(!$isAuth) {
            echo "Você não saiu do sistema !!";
        }else{
            echo "Você saiu do sistema !!";
        }
    }
}

Login::$user = 'Leonardo Vieira';
Login::verifyLogin();
$instanceLogin = new Login();
$instanceLogin->Logout(false);
