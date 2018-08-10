<!DOCTYPE html>
<html>
<head>
	<title>jQuery AJAX</title>
	<meta charset="utf-8">


	<?php require_once "partials/header.php" ?>
</head>
<body>

	<div class="container-fluid">
		<h1>jQuery AJAX</h1>
	</div>




<script type="text/javascript">
	// $.get(<url>,<callback function>);

	$.get('controllers/ajax_endpoint.php', ($users) => {
		
		
		console.log($users)
	});
</script>

</body>
</html>