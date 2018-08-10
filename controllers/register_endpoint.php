<?php 

$username = $_POST['username'];
$password = sha1($_POST['password']);
$confirm_password = sha1($_POST['confirmpassword']);



$new_user = ['username' => $username ,
			 'password'=>$password
	];

// get json string from json file
$json_string = file_get_contents('../users.json');

// convert json string to php array
$php_array = json_decode($json_string, true);

// add the new user to php array
array_push($php_array, $new_user);

// open user json
$fp = fopen('../users.json', 'w');

// rewritejson data
fwrite($fp, json_encode($php_array, JSON_PRETTY_PRINT));

// close fp
fclose($fp);
	
// echo "$username $password $confirm_password";

header('location: ../index.php');
 ?>