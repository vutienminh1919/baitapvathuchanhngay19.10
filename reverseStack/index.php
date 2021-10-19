<?php
include_once "StackNumber.php";

$stack = new StackNumber(10);
$stackNew = new StackNumber(10);

$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->push(6);
$stack->push(7);
$stack->push(8);
$stack->push(9);
$stack->push(10);


$stackNew->push($stack->pop());
$stackNew->push($stack->pop());
$stackNew->push($stack->pop());
$stackNew->push($stack->pop());
$stackNew->push($stack->pop());
$stackNew->push($stack->pop());
$stackNew->push($stack->pop());
$stackNew->push($stack->pop());
$stackNew->push($stack->pop());
$stackNew->push($stack->pop());

echo "<pre>";
 print_r($stack);
print_r($stackNew);



