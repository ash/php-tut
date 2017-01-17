<?php

$a = 123;

function f() {
    global $a;
    echo $a;
}

f();


