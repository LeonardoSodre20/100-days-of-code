<?php

class Father
{
    protected $protected = 'Protegido';

    protected function MethodProtected()
    {
        echo "Método protegido na classe pai";
    }
}

class Children extends Father
{
    public function AccessAttrProtected()
    {
        echo $this->protected . "<br/>";
    }

    public function GetMethodProtected()
    {
        return parent::MethodProtected();
    }
}

$instanceChildren = new Children();
$instanceChildren->AccessAttrProtected();
$instanceChildren->GetMethodProtected();
