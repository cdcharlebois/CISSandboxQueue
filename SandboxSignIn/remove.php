<?php
	//connect to db
	mysql_connect("localhost" , "connerch_d3rp", "derp1") or die(mysql_error());
	mysql_select_db("connerch_sandbox") or die();
	
	
	
	$qry = "delete from visit where id = '". $_REQUEST["sel"] ."';";
	echo $qry;
	
	$result = mysql_query($qry);
	
	if ($result == true){
		header("Location: http://www.connercharlebois.com/projects/SandboxSignIn/Queue.php");
		exit();
	}
	
	
	
	