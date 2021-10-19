<?php

class Stack
{
    private $stack;
    private $limit;


    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($data)
    {
        if (!$this->isFull()) {
            array_push($this->stack,$data);
        } else {
            echo "stack is full";
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            array_pop($this->stack);
        } else {
            echo " stack is empty";
        }

    }

    public function peek()
    {
        if ($this->isEmpty()) {
            return $this->stack[0];
        }else{
            return " nothing here";
        }
    }

    public function isEmpty()
    {
        return count($this->stack) <= 0;
    }

    public function isFull()
    {
        return count($this->stack) >= $this->limit;
    }

}