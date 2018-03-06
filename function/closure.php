<?php

function myClosure($hi) 
{
    return function($name) use ($hi) {
        return sprintf("%s, %s", $hi, $name);
    };
}

$foo = myClosure("Hello");
echo $foo("World");

// Result:
// Hello World
