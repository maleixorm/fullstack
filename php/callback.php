<?php

function teste($name)
{
    return "Olá. Meu nome é " . $name . "!";
}

function teste2($callback)
{
    if (is_callable($callback)) {
        return $callback("Marcos");
    }
    else {
        return "Não é um callback";
    }
}

$user = "teste";
echo teste2("teste");

class User
{
    public static function testando($name, $age)
    {
        return "<br><br>Olá. Meu nome é ". $name . " e eu tenho " . $age . " anos.";
    }
}

echo call_user_func(["User", "testando"], "Marcos", 36);