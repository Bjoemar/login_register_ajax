<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 shrink-to-fit=no">
</head>
<body>
	<div>
		<h1>UPLOAD</h1>
		<form enctype="multipart/form-data" action ="controllers/upload_image_endpoint.php" method="POST">
			<label>Image</label><input  type="file" name="image">
			<button>Submit</button>
		</form>
	</div>

</body>
</html>