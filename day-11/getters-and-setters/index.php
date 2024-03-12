<?php 

    class Authentication {
        private $email;
        private $password;

        public function getEmail() {
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setEmail($value_email) {
            $validation_email = filter_var($value_email, FILTER_SANITIZE_EMAIL);
            $this->email = $validation_email;
        }

        public function setPassword($value_pass) {
            $this->password = $value_pass;
        }

        public function Auth() {
            if($this->email == 'LeonardoSodre25@outlook.com' and $this->password == 'Teste123'):
                echo "Autenticado com sucesso !!";
            else: 
                echo "Opss.. aconteceu algum erro em relação a autenticação !!";
            endif;
        }
    }

    $authInstance = new Authentication();
    $authInstance->setEmail('LeonardoSodre25@outlook.com');
    $authInstance->setPassword('Teste123');
    $authInstance->Auth();
    echo "<br/>";
    echo $authInstance->getEmail();
    echo "<br/>";
    echo $authInstance->getPassword();

?>