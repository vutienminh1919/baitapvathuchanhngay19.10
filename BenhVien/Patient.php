<?php

class Patient
{
public string $name;
public  $code;
public int $limit;
public array $queue;


    public function __construct(string $name, $code)
    {
        $this->queue = [];
        $this->name = $name;
        $this->code = $code;
        $this->limit = 6;
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
           return array_shift($this->queue);
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

    public function toString()
    {
        return "code: ". $this->code . " " . "name: ". $this->name;
    }

    public function sortPatient()
    {
        return rsort($this->queue);
    }


}