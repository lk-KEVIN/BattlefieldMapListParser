<?php
function ModeReplacer($text) {
	$from = array(
		"Aftermath",
		"AirSuperiority0",
		"ArmoredKill",
		"BacktoKarkand0",
		"CaptureTheFlag0",
		"CTF0",
		"CarrierAssaultLarge0",
		"CarrierAssaultSmall0",
		"Chainlink0",
		"ConquestAssaultLarge0",
		"ConquestAssaultSmall0",
		"ConquestDomination0",
		"ConquestLarge0",
		"ConquestSmall0",
		"CloseQuarters0",
		"Elimination0",
		"Domination0",
		"EndGame0",
		"GunMaster0",
		"SquadObliteration0",
		"Obliteration0",
		"Rush0",
		"RushLarge0",
		"Scavenger0",
		"singlePlayer0",
		"SquadDeathMatch0",
		"SquadRush0",
		"TankSuperiority0",
		"TeamDeathMatchC0",
		"TeamDeathMatch0"
	);
	$to   =	array(
		"Aftermath",
		"Superioridad Aérea",
		"Armored Kill",
		"Back to Karkand",
		"Captura la Bandera",
		"Captura la Bandera",
		"Asalto al Portaviones - Grande",
		"Asalto al Portaviones - Pequeño",
		"Red de Enlaces",
		"Asalto Conquista Grande",
		"Conquest Assault Pequeño",
		"Dominación de Conquista",
		"Conquista Grande",
		"Conquista Pequeño",
		"Close Quarters",
		"Erradicación",
		"Dominación",
		"End Game",
		"Maestro Armero",
		"Obliteración por Patrullas",
		"Obliteración",
		"Asalto",
		"Asalto Grande",
		"Carroñero",
		"Campaña",
		"TCT: Patrulla",
		"Asalto por Patrullas",
		"Superioridad de Tanques",
		"TCT Close Quarters",
		"TCT"
	);

	if (in_array($text, $from)) {
		$mode = str_ireplace($from, $to, $text);
	} else {
		$mode = "";
	}

	return $mode;
}