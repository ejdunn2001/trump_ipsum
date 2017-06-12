<?php
if($_POST){	
	//DECLARE VARIABLES
	$users_email 		= $_POST['users_email'];
	$users_firstname 	= $_POST['users_firstname'];
	
	//DATABASE CONNECTION
	if($dbc = mysqli_connect('localhost', 'root', '', 'hcc')){
		echo 'good connection';
		
		$query = "UPDATE users SET users_firstname = '$users_firstname' WHERE users_email = '$users_email'"; //build the query
		echo $query;
		
		mysqli_query($dbc, $query);//run the query
		
		//header('Location: read.php');
			
		
	}else{echo 'bad connection';}
}

if($_GET){	
	//DECLARE VARIABLES
	$id 		= $_GET['id'];
	
	//DATABASE CONNECTION
	if($dbc = mysqli_connect('localhost', 'root', '', 'hcc')){
		echo 'good connection';
		
		$query = "SELECT * FROM users WHERE users_email = '$id'"; //build the query
		echo $query;
		
		if($r = mysqli_query($dbc, $query)){//run the query
			echo 'good query';
			
			$row = mysqli_fetch_array($r);
		}
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
<form action="update.php" method="post" name="form1" id="form1">
    <label for="users_email">Email:</label>
    <input type="hidden" name="users_email" id="users_email" value="<?php echo $row['users_email'];?>"><br>
    <label for="users_firstname">First Name:</label>
    <input type="text" name="users_firstname" id="users_firstname" value="<?php echo $row['users_firstname'];?>"><br>
    <input type="submit" name="Save" id="Save" value="Update">
</form>
</body>
</html>