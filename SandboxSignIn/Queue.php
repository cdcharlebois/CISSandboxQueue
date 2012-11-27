<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta http-equiv="refresh" content="15"/>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js"></script>
		<script src="js/SignInApp.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/main.css"/>
	<title>CIS Sandbox Queue</title>
</head>
<body>
	<div id="cdc-wrapper">
		<form action="remove.php" method="post">
		<table cellpadding="5">
			<tr>
				<th>Student</th>
				<th>Class</th>
				<th>Time of Arrival</th>
				<th>Needs Help?</th>
				<th>Remove</th>
			</tr>
			<?php
				mysql_connect("localhost" , "connerch_d3rp", "derp1") or die(mysql_error());
				mysql_select_db("connerch_sandbox") or die();
				
				$qry = "SELECT * FROM visit";
				$result = mysql_query($qry);
			
					while ( $row = mysql_fetch_array($result)) {
						if($row['needHelp'] != "No"){
							$x = "<tr><td>";
							if ($row['name'] != null) {
								$x .= $row['name'];
							}
							else {
								$x .= $row['studentID'];
							}
							$x .= "</td><td>". $row['course'] ."</td><td>" . $row['arrivalTime'] . "</td><td>". $row['needHelp'] ."</td><td>";
							$x .= "<a class='btn btn-danger' href='http://www.connercharlebois.com/projects/sandboxsignin/remove.php?sel=". $row['id'] ."'>remove</a>" ;
							$x .= "</td></tr>";
							echo $x;
						}
					}
			
				exit();
			?>
			</table>
			</form>
	</div>
</body>
</html>