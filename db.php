<?php 

	session_start();

	$conn = mysqli_connect("localhost", "root","", "to_do_list");

	// configuration:
	//
	// in the "localhost" field complete with the server name.
	// in the "root" field complete with your username.
	// in the "" field complete with your password.
	// the "to_do_list" field is the name of the data base, you will need create a data base with the same name.
?>