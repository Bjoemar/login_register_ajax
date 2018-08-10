<?php require_once "templates.php" ?>

<?php function getTitle() {
	echo "Register";
} ?>


<?php function getContent() { ?>


<h1>Register</h1>
<form id="register_form" action="controllers/register_endpoint.php" method="POST">
	<label>Username</label>
	<input class="form-control" type="text" name="username" id="username">
	<span></span> <br>
	<label>Password</label>
	<input class="form-control" type="password" name="password" id="password">
	<span></span> <br>
	<label>Confirm Password</label>
	<input class="form-control" type="password" name="confirmpassword" id="confirmpassword">
	<span></span> <br>
	<button id="registerBtn" class="btn btn-primary" type="button">Register</button>

</form>

	<?php require_once "users_list.php" ?>
<script type="text/javascript">
	let users =  '';
	$.get('users.json' , (data) => {
		users = data;
	})
	$('#registerBtn').click(() => {


	let errorFlag = false;
	const username = $('#username').val();

	// let users - $users;
	let matchFlag = false;

	if(username.length == 0) {
		$('#username').next().html('This field is required').css('color','red');
		errorFlag = true;
	} else {

		for(user of users){
		if (user.username == username) {
			matchFlag = true;
			break;
		}
	}
	if(matchFlag == true) {
		$('#username').next().html('username already exists').css('color','red');
		errorFlag = true;
	} else {
		$('#username').next().html('Username is avalable').css('color','green');
		
	}
}
	
	const password = $('#password').val();
	const confirm_password = $('#confirmpassword').val();

	if (password.length == 0) {
		$('#confirmpassword').next().css('color','red');
		$('#confirmpassword').next().html('please put a password')
		errorFlag = true;
	} else { 
		// $('#cnf-pwd').next().html('');
		if(password !== confirm_password){
			$('#confirmpassword').next().css('color','red');
			$('#confirmpassword').next().html('Password did not match ')
			errorFlag = true;
		} else {
			$('#confirmpassword').next().html('')
		}
	}

	if(errorFlag == false) {
		$('#register_form').submit();
	}

})

</script>



























<?php } ?>