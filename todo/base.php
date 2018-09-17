<?php
/* This code is used to see the available driversforeach(PDO::getAvailableDrivers() as $driver){echo $driver.'<br />';}*/
	try
	{
		$dbh = new PDO("sqlite:db/todolist1.db");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

?>