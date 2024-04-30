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