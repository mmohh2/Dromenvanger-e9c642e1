<?php

$array = array();

echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;

$number = readline(">");

if (is_numeric($number)){

}else {

    exit ($number . " " . "is geen getal");
}
for($i=0; $i<$number; $i++) {

    echo "Wat is jouw naam?" . PHP_EOL;

    $friend = readline(">");

    echo "Hoeveel dromen ga je opgeven?" . PHP_EOL;

    $num2 = readline(">");

    if (is_numeric($num2)){

    }else {

        exit ($num2 . " is geen getal");

    }

    $array[$friend] = array();

    for($j=0; $j<$num2; $j++) {

        echo "Wat is jouw droom?" . PHP_EOL;

        $droom = readline(">");


        array_push ($array[$friend], $droom);

    }

}

foreach($array as $friend => $dromen){

    foreach($dromen as $droom){

        echo ($friend ." heeft dit als droom: " .$droom) . PHP_EOL;

    }
}
