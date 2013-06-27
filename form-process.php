<?php

	$adj1 = $_POST["adjective1"];
	$plnoun = $_POST["pluralnoun"];
	$bodpart = $_POST["partofthebody"];
	$adj2 = $_POST["adjective2"];
	$adj3 = $_POST["adjective3"];
	$email = $_POST["email"];

	var_dump($_POST);

	$message = "According to a/an ".$adj1." survey, more Americans go to zoos than watch ".$plnoun." on TV or play games such as ".$bodpart."-ball. Zoos have every kind of animal, from ".$adj2." aardvarks to ".$adj3." zebras. The most fun to watch are the monkeys.";

	$message = wordwrap($message, 70, "\r\n");

	$headers = "From: nobody@whocares.com", "Reply-To:".$email;

	echo mail("kelshaelaw@gmail.com", "a Madlib for you to have", $message, $headers);


?>