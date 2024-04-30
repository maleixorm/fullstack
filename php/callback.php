<?php

function teste($name)
{
    return "Olá. Meu nome é " . $name . "!";
}

function teste2($callback)
{
    return $callback("Marcos");
}

echo teste2("teste");