<?php include "base.php"; ?>
<?php
	try
	{
		$create_table_command = 'CREATE TABLE tblToDoList(taskid integer primary key, taskname varchar(100),taskdate varchar(20), taskdesc varchar(300), priority integer, status varchar(50))';
		$dbh->exec($create_table_command);
		echo "<br />" . $create_table_command ."\n";
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>