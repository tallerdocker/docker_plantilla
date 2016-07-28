<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Documento de Prueba::Docker</title>
</head>
<body>
		<h1>Ejecutando HTML con Docker</h1>
	<input type="text" name="input">
	<button onclick="alerta();">Push me</button>
	<?php for($i=0;$i<10;$i++){
			echo "<br>Soy parte del For";
	} ?>
</body>
</html>

<script type="text/javascript">
	function alerta(){
		alert("Hola, soy un JS ejecutandose en un Contenedor de Docker, pero ahora tengo PHP");
	}
</script>