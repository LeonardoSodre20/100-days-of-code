<?php
class Authenticate
{
    public $email;
    public $password;
    public $name;
    public $isAuthenticated = false;

    public function __construct($email, $password, $name)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
    }

    public function RenderData()
    {
        echo "E-mail : " . $this->email . "<br/>" . "Senha : " . $this->password . "<br/>" . "Nome : " . $this->name;
    }

    public function Login()
    {
        $value_email = $this->email;
        $value_password = $this->password;

        if ($value_email != "LeonardoSodre25@outlook.com" or $value_password != "Teste123") {
            echo "<br/>";
            echo "E-mail ou senha incorretos !!";
        } else {
            echo "<br/>";
            echo "Usuário autenticado com sucesso !!";
        }
    }

    public function setValueInLogoutVariable($value)
    {
        return $this->isAuthenticated = $value;
    }

    public function Logout()
    {
        if (!$this->isAuthenticated) {
            echo "<br/>";
            echo "Você está desconectado...";
        } else {
            echo "<br/>";
            echo "Você está autenticado !!";
        }
    }
}

$instance = new Authenticate('LeonardoSodre25@outlook.com', 'Teste123', 'Leonardo');
$instance->RenderData();
$instance->Login();
$instance->setValueInLogoutVariable(true);
$instance->Logout();


