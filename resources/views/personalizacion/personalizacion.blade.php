<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personalización</title>
	<style>
	body{
		font-size: {{$fuente}};
	}
	</style>
</head>
<body>
	<p>fuente: {{$fuente}}</p>
	<form action="/personalizacion" method="post">
		Fuente: 
		<select name="fuente">
			<option value="24pt">Grande</option>
			<option value="16pt">Mediana</option>
			<option value="12pt">Pequeña</option>
		</select>
		<br />
		<input type="submit" value="Enviar">
	</form>
</body>
</html>