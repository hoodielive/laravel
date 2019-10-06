<?php


class Report 
{
	public function generate($user) 
	{
		echo( "hello, " . $user);
	}
}

$report = new Report();
var_dump(report);
