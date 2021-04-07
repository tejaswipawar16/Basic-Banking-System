	<?php
	$servername='localhost';
	$user='id16476022_root';
	$pass='*j6jcl@b_@O9+!#{';
	$dbname='id16476022_basic_bank' ;

	$conn=mysqli_connect($servername,$user,$pass,$dbname);
	if(!$conn)
	{
		die("Could not connect to the database -->". mysqli_connect_error());
	}
	
