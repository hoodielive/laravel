<?php 

class A_Class
{
	function foo() 
	{
		if(isset($this)) 
		{
			echo '$this is defined ('; 
			echo get_class($this); 
			echo ")\n"; 
		}
		else 
		{
			echo "\$this is not defined.\n"; 
		}
	}
}

class B_Class
{
	function bar() 
	{
		A_Class::foo(); 
	}
}

$a = new A_Class(); 
$a->foo(); 
A_Class::foo();

$b = new B_Class(); 
$b->bar(); 
B_Class::bar(); 

