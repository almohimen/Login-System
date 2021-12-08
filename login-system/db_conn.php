<?php
	$sname="localhost";
	$uname="root";
	$password="";

	$db_name="text_db";

	$conn= mysqli_connect($sname,$uname,$password,$db_name);

	if (!$conn) {
		echo "Connection Failed";
	}
