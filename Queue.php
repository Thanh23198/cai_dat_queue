<?php
include_once('node.php');
class Queue {
    public $font ;
    public $back ;
    public  function isEmpty(){
        return $this->font == null ;
    }
    public function enqueue($value){
        $oldBack = $this->back;
        $this->back = new node();
        $this->back->value = $value;
        if($this->isEmpty()){
            $this->font = $this->back;
        }else{
            $oldBack->next = $this->back;
        }
    }
    public function dequeue(){
        if($this->isEmpty()){
            return null ;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}
$queue = new Queue();
$queue->enqueue("Start");
$queue->enqueue("1");
$queue->enqueue("2");
echo $queue->dequeue().'<br>';
echo $queue->dequeue().'<br>';
var_dump($queue->isEmpty());
$queue->enqueue("3");
$queue->enqueue("4");
echo $queue->dequeue().'<br>';
echo $queue->dequeue().'<br>';
echo $queue->dequeue().'<br>';
while (!$queue->isEmpty()){
    echo $queue->dequeue().'<br>';
}
var_dump($queue->isEmpty());