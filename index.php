<!DOCTYPE html>
<html>
<head>
	<title>Web Design Responsive</title>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->
	<!--<link rel="stylesheet" type="text/css" href="normalize.css">-->
	<link rel="stylesheet" type="text/css" href="layout.css">
	<link rel="stylesheet" type="text/css" href="componentes.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>Importe seu arquivo txt</h1>

	<form method="POST" action="apagar.php" enctype="multipart/form-data">
		<label>Arquivo</label><br>
		<input type="file" name="arquivo"><br><br>
		<input type="submit" value="salvar">
	</form>
</body>
</html>