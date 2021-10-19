<?php

class Queue
{
    private $queue;
    private $limit;


    public function __construct($limit)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    public function enqueue($data)
    {
        if (!$this->isFull()) {
            array_push($this->queue,$data);
        } else {
            echo "queue is full";
        }
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
            array_shift($this->queue);
        } else {
            echo " queue is empty";
        }

    }

    public function peek()
    {
        if ($this->isEmpty()) {
            return $this->queue[0];
        }else{
            echo " nothing here";
        }
    }

    public function isEmpty()
    {
        return count($this->queue) <= 0;
    }

    public function isFull()
    {
        return count($this->queue) >= $this->limit;
    }

    public function piority()
    {

    }

}