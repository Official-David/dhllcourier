<?php
	$dbUsername="u922617526_root";
	$psswd = "#June2021";
	$dbName = "u922617526_data";
	$hostName = "localhost";
	$myConn = mysqli_connect($hostName,$dbUsername,$psswd,$dbName);
	if(!$myConn){
        die("Could not connect at the moment because ". mysqli_connect_error());
    }
?>