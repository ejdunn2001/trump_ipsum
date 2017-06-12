<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trump Ipsum</title>
</head>

<body>
<?php
//DATABASE CONNECTION
if($dbc = mysqli_connect('localhost', 'root', 'root', 'trump_ipsum')){
	//echo "successful connection";
	
	$query = "SELECT * FROM tweets ORDER BY list_created_at DESC";//create query
	
	if($r = mysqli_query($dbc, $query)){ //run the query
		//echo "successful query";
		//echo '<pre>';
		//print_r($r);
		//echo '</pre>';
		
		while($row = mysqli_fetch_array($r)){
			echo $row['list_text']. '<br>';
			}
		
		mysqli_close($dbc);//close the connection
		
		}else{echo "bad query";}
	
	}else{echo "you broke it";}



?>



</body>
</html>