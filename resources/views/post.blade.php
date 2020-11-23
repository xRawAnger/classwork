<!DOCTYPE html>
<html>
<head>
	<title>add post</title>
</head>
<body>
	<form method="POST" action="storeposts" enctype="multipart/form-data">
		@csrf
		<input type="text" name="name">
		<input type="file" name="picture">
		<textarea name="description"></textarea>
		<button type="submit">Submit</button>
	</form>
</body>
</html>