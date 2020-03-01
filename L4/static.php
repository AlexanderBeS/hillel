<?php


function test()
{
    $a = 0;
    echo $a;
    $a++;
}

function test1()
{
    static $a = 0;
    echo $a;
    $a++;
}

test();
test();

echo "\n";

test1();
test1();