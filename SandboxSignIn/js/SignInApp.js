/**
 * BENTLEY CIS SANDBOX SIGN IN JAVASCRIPT APP
 * @author Conner Charlebois
 */
 
function AppCtrl($scope){	
	$scope.student = {
		id:'',
		course:'',
		needHelp:''
	};
	
	$scope.courses = [
		{id:'0', name:'IT 101'},
		{id:'1', name:'CS 150'},
		{id:'2', name:'CS 180'},
		{id:'3', name:'CS 213'},
		{id:'4', name:'CS 240'},
		{id:'5', name:'CS 280'},
		{id:'6', name:'CS 314'},
		{id:'7', name:'CS 350'},
		{id:'8', name:'CS 360'},
		{id:'9', name:'CS 460'},
		{id:'10', name:'CS 480'},
		{id:'11', name:'other'}
	];
	$scope.resps = ["Yes","No","Maybe"];	//responses
	
	$scope.showClasses = function(){
		if($scope.student.id != '' && $scope.student.id.length == 8){ 
			document.getElementById("cdc-wrapper").style.display = "none";
			document.getElementById("classes").style.display = "block";
		}
		else
			alert("Please check the Student ID");
	}
	
	$scope.addClass = function(i){
		$scope.student.course = $scope.courses[i].name;
		document.getElementById("classes").style.display = "none";
		document.getElementById("help").style.display = "block";
	}
	
	$scope.addHelp = function(i){
		$scope.student.needHelp = $scope.resps[i];
		document.getElementById("help").style.display = "none";
		document.getElementById("commit").style.display = "block";
	}
}

