<?php

namespace App\Test;

use App\Vector;

function runTest()
{
    $v1 = new Vector(3, 9, 5);
    echo "v1 = " . $v1 . "\n"; // (3, 9, 5)

    $v2 = new Vector(4, 10, -5);
    echo "v2 = " . $v2 . "\n"; // (4, 10, -5)

    $vectorAddition = $v1->add($v2);
    $vectorDifference = $v1->sub($v2);
    $vectorNumberProduct = $v1->multiply(2);
    $scalarProduct = $v1->scalar($v2);
    $vectorProduct = $v1->vector($v2);

    echo "Сумма векторов\n";
    echo $vectorAddition; // (7;19;0)
    echo "\nРазность векторов\n";
    echo $vectorDifference; // (-1;-1;10)
    echo "\nПроизведение вектора на число\n";
    echo $vectorNumberProduct; // (6;18;10)
    echo "\nСкалярное произведение векторов\n";
    echo $scalarProduct; // 77
    echo "\nВекторное произведение\n";
    echo $vectorProduct; // (95;-35;6)
}
