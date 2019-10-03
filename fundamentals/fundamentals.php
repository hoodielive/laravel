<?php 

class VibeClass
{
	// property declaration
	public $var = 'this is a property variable';

	// method declaration
	public function displayVar() 
	{
		echo $this->var; 
	}
}

$a = new VibeClass(); 
$a->displayVar(); 

$className = 'VibeClass'; 
$instance = new $className(); 

$assigned = $instance; 
$reference =& $instance; 

$instance->var = '$assigned will have this value'; 
$instance = null;

var_dump($instance);
var_dump($reference); 
var_dump($assigned); 
