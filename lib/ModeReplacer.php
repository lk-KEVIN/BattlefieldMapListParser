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
		"Air Superiority",
		"Armored Kill",
		"Back to Karkand",
		"Capture The Flag",
		"Capture the Flag",
		"Carrier Assault Large",
		"Carrier Assault Small",
		"Chain Link",
		"Conquest Assault Large",
		"Conquest Assault Small",
		"Conquest Domination",
		"Conquest Large",
		"Conquest Small",
		"Close Quarters",
		"Defuse",
		"Domination",
		"End Game",
		"Gun Master",
		"Squad Obliteration",
		"Obliteration",
		"Rush",
		"Rush Large",
		"Scavenger",
		"Single Player",
		"Squad Deathmatch",
		"Squad Rush",
		"Tank Superiority",
		"Team Deathmatch Close Quarters",
		"Team Deathmatch"
	);

	if (in_array($text, $from)) {
		$mode = str_ireplace($from, $to, $text);
	} else {
		$mode = "";
	}

	return $mode;
}