<?php 

namespace App\classes;
class Queue{    
    public $queue = array();
    //done
    public function enqueue($name) {
        array_push($this->queue,$name);   
    }

    //done
    public function dequeue() {
        $value = $this->queue[0];
        unset($this->queue[0]);
        return $value;
    }
    
    //done
    public function peek() {
        return $this->queue[0];
    }

    //done
    public function is_empty() {
        return count($this->queue) > 0 ? 'false' : 'true';
    }

    //done
    public function size() {
        return count($this->queue);
    }   
    //done
    public function print() {
        return $this->queue;
    }

}
    