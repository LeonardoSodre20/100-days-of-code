<?php 

class Person {
    const name = 'Leonardo';

    public function RenderName() {
        echo self::name; // Renderização de CONSTANTES.
    }

}

class Leonardo extends Person {
    public function RenderName()
    {
        echo parent::name . '= Class com herança para referênciar a constante.';
    }
}

$instance = new Person();
$instance->RenderName();
echo "<br/>";
$instanceOtherClass = new Leonardo();
$instanceOtherClass->RenderName();