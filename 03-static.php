<?php

function f() {
    static $x = 3;
    $x++;
    return $x;
}

echo f();
echo f();
