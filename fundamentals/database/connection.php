<?php 

class Connection 
{
    public function make()
    {
        try 
        {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'laradev', 'password');
		} 
			catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
}

$pdo = Connection::make(); 
