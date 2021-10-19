<?php
include_once "Queue.php";
$queue = new Queue(10);
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
$queue->enqueue(6);

echo "<pre>";
print_r($queue);