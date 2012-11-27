<!DOCTYPE html>
<html ng-app lang="en">
<head>
	<meta charset="utf-8">
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js"></script>
		<script src="js/SignInApp.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/main.css"/>
	<title>Welcome to the CIS Sandbox</title>
</head>
<body ng-controller="AppCtrl">
	<div id="cdc-wrapper">
		<div>
			<table width="100%" style="text-align:center" >
				<tr>
					<td>
						<img src="logo.png" width="700" />
					</td>
				</tr>
				<tr>
					<td>Please enter your Bentley ID to continue...</td>
				</tr>
				<tr>
					<td>
						<div class="input-prepend" style="position: relative;left: 230px;">
							<span class="add-on">@</span>
							<input ng-model="student.id" class="span3" type="text" placeholder="Bentley ID">
						</div>
						<input id="id-submit" type="button" class="btn btn-primary" value="Next" ng-click="showClasses()" />
					</td>
				</tr>
			</table>
		</div>
			
	</div>
	
	
	<div id="classes" class="sel">
		<h3>What class are you here for help with?</h3>
		<div class="class" ng-repeat="course in courses" ng-click="addClass($index)">
			<span class="coursename">{{course.name}}</span>
		</div>
	</div>
	
	
	<div id="help" class="sel">
		<h3>Would you like help today?</h3>
		<div class="class" ng-repeat="resp in resps" ng-click="addHelp($index)">
			<span class="coursename">{{resp}}</span>
		</div>
		<br/>
		<br/>
	</div>
	
	
	<div id="commit" class="sel">
		<dl class="dl-horizontal">
			<dt>Student ID:</dt>
			<dd>{{student.id}}</dd>
			<dt>Course:</dt>
			<dd>{{student.course}}</dd>
			<dt>Help:</dt>
			<dd>{{student.needHelp}}</dd>
		</dl>
		<form action="add.php" method="POST" style="text-align:center; padding-top:25px">
			<input name="id" type="hidden" value="{{student.id}}"/>									
			<input name="course" type="hidden" value="{{student.course}}"/>					
			<input name="needHelp" type="hidden" value="{{student.needHelp}}"/>
			<input class="btn btn-success btn-large" type="submit" value="Go!" />
		</form>
	</div>
	
	<div id="debug" style="clear:both; display:none;">
		<pre>
			{{student | json}}
		</pre>
		
	</div>
</body>
</html>