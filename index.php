<!DOCTYPE html>
<html lang="es">
<head>
	<title>Rotación de Mapas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Rotación de Mapas">
    <meta name="author" content="lk.KEVIN">
</head>
<body>
<div class="container">
<?php
require_once('lib/MapNameReplacer.php');
require_once('lib/ModeReplacer.php');
require_once('lib/NameSanitizer.php');
$ini_array = parse_ini_file("locations.ini");

//BF4 = 4
//BF3 = 3
$version = 4;
$n = 0;

foreach($ini_array as $name => $filename) {

echo "	<div class=\"card\">
		<div class=\"card-header\" role=\"tab\" id=\"heading".NameSanitizer($name)."\">
			<h5 class=\"mb-0\">
				<a class=\"collapsed\" data-toggle=\"collapse\" href=\"#collapse".NameSanitizer($name)."\" aria-expanded=\"false\" aria-controls=\"collapse".NameSanitizer($name)."\">
					".$name."
				</a>
			</h5>
		</div>
		<div id=\"collapse".NameSanitizer($name)."\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading".NameSanitizer($name)."\">
			<div class=\"card-block\">

	<table class=\"table table-striped\">
		<tr>
			<td>#</td>
			<td>Mapa</td>
			<td>Modo</td>
			<td>Vueltas</td>
		</tr>";

	$file = new SplFileObject($filename);
	$file->setFlags(SplFileObject::READ_CSV | SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);
	$file->setCsvControl(' ');

	foreach ($file as $row) {
		list($mapa, $modo, $vuelta) = $row;
		printf("
		<tr>
			<td>".++$n."</td>
			<td>%s</td>
			<td>%s</td>
			<td>%d</td>
		</tr>",
		MapNameReplacer($mapa,$version),
		ModeReplacer($modo),
		$vuelta
		);
}
			echo "
			</table>
			</div>
		</div>
	</div>";
}
?>
</div>
<script type="text/javascript" src="assets/jquery.min.js"></script>
<script type="text/javascript" src="assets/bootstrap.min.js"></script>
</body>
</html>