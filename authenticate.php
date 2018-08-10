<?php 

session_start();

$username = $_POST['username'];
$password = sha1($_POST['password']);



$string = file_get_contents('users.json');
$users = json_decode($string, true);

$match_flag = false;


foreach ($users as $user ) {
	if($user['username'] == $username && $user['password'] == $password)
	{
		$match_flag = true;
		break;
	}


}

if($match_flag ==true) {
	echo "loggin Succesful ";
	$_SESSION['log_in_user'] = $username;
	
}
	header('location: index.php');
 ?>