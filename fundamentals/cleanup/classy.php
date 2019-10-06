<?php 

// todo app

class Task 
{
   protected $description; 

   protected $completed = false;

   public function __construct($description) 
   {
        // Automatically triggered on Instantiation 
        $this->description = $description;
   }

   public function complete()
   {
        $this->completed = true;      
   }

   public function isComplete()
   {
        return $this->completed; 
   }
}


$task = new Task('Go to the store.', false);

$task->complete(); 

var_dump($task->isComplete());

var_dump($task); 

$tasks = [
    new Task('Go to store.'), 
    new Task('Finish my screencast.'), 
    new Task('Clean my room.')
];

$tasks[0]->complete();