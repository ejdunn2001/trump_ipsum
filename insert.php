<?php
if($_POST){	
	//DECLARE VARIABLES
	$users_email 		= $_POST['users_email'];
	$users_firstname 	= $_POST['users_firstname'];
	
	//DATABASE CONNECTION
	if($dbc = mysqli_connect('localhost', 'root', '', 'hcc')){
		echo 'good connection';
		
		$query = "INSERT INTO users (users_email, users_firstname) VALUES ('$users_email', '$users_firstname')"; //build the query
		echo $query;
		
		mysqli_query($dbc, $query);//run the query
		
	}else{echo 'bad connection';}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="insert.php" method="post" name="form1" id="form1">
    <label for="users_email">Email:</label>
    <input type="email" name="users_email" id="users_email"><br>
    <label for="users_firstname">First Name:</label>
    <input type="text" name="users_firstname" id="users_firstname"><br>
    <input type="submit" name="Save" id="Save" value="Submit">
</form>
</body>
</html>