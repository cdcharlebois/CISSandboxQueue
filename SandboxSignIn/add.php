<?php
			error_reporting(E_ALL);
			mysql_connect("localhost" , "connerch_d3rp", "derp1") or die(mysql_error());
			mysql_select_db("connerch_sandbox") or die();

	$id = $_REQUEST["id"];
	$course = $_REQUEST["course"];
	$help = $_REQUEST["needHelp"];
	
	echo $id . "<br/>" . $course . "<br/>" . $help;
	
	//$qry2 = "INSERT INTO VISIT (studentID, course, needHelp) VALUES (".$id."', '".$course."', '".$help.")";
	$qry2 = "INSERT INTO VISIT (studentID, course, needHelp) VALUES ($id, $course, $help)";
	$qry = sprintf("INSERT INTO VISIT (studentID, course, needHelp) VALUES ('%s', '%s', '%s')", mysql_real_escape_string($id), mysql_real_escape_string($course), mysql_real_escape_string($help));
	echo $qry . "<br/>". $qry2;
	
	$insert_result = mysql_query($qry2);
	
	if ($insert_result == true){
		header("Location: http://www.connercharlebois.com/projects/SandboxSignIn/index.html");
		exit();
	}
	else {
		echo $insert_result;
	}
	