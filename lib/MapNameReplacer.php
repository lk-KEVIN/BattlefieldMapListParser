<?php
function MapNameReplacer($text,$game) {
	$from3 = array(
		"MP_001",
		"MP_003",
		"MP_007",
		"MP_011",
		"MP_012",
		"MP_013",
		"MP_017",
		"MP_018",
		"MP_Subway",
		//----Back to Karkand---
		"XP1_001",
		"XP1_002",
		"XP1_003",
		"XP1_004",
		//----Close Quarters---
		"XP2_Palace",
		"XP2_Office",
		"XP2_Factory",
		"XP2_Skybar",
		//----Armored Kill---
		"XP3_Valley",
		"XP3_Shield",
		"XP3_Desert",
		"XP3_Alborz",
		//----Aftermath---
		"XP4_Parl",
		"XP4_Quake",
		"XP4_FD",
		"XP4_Rubble",
		//----End Game---
		"XP5_001",
		"XP5_002",
		"XP5_003",
		"XP5_004"
	);
	$to3   =	array(
		"Grand Bazaar",
		"Tehran Highway",
		"Caspian Border",
		"Seine Crossing",
		"Operation Firestorm",
		"Damavand Peak",
		"Noshahr Canals",
		"Kharg Island",
		"Operation Metro",
		//----Back to Karkand---
		"Strike at Karkand",
		"Gulf of Oman",
		"Sharqi Peninsula",
		"Wake Island",
		//----Close Quarters---
		"Donya Fortress",
		"Operation 925",
		"Scrapmetal",
		"Ziba Tower",
		//----Armored Kill---
		"Death Valley",
		"Armored Shield",
		"Bandar Desert",
		"Alborz Mountains",
		//----Aftermath---
		"Azadi Palace",
		"Epicenter",
		"Markaz Monolith",
		"Talah Market",
		//----End Game---
		"Operation Riverside",
		"Nebandan Flats",
		"Kiasar Railroad",
		"Sabalan Pipeline"
	);

	$from4 = array(
		"MP_Abandoned",
		"MP_Damage",
		"MP_Flooded",
		"MP_Journey",
		"MP_Naval",
		"MP_Prison",
		"MP_Resort",
		"MP_Siege",
		"MP_TheDish",
		"MP_Tremors",
		//----SECOND ASSAULT---,
		"XP0_Caspian",
		"XP0_Firestorm",
		"XP0_Metro",
		"XP0_Oman",
		//----CHINA  RISING---,
		"XP1_001",
		"XP1_002",
		"XP1_003",
		"XP1_004",
		//----NAVAL STRIKE---,
		"XP2_001",
		"XP2_002",
		"XP2_003",
		"XP2_004",
		//----DRAGONs  TEETH---,
		"XP3_MarketPl",
		"XP3_Prpganda",
		"XP3_UrbanGdn",
		"XP3_WtrFront",
		//----FINAL STAND---,
		"XP4_Arctic",
		"XP4_SubBase",
		"XP4_Titan",
		"XP4_WlkrFtry",
		"XP5_Night_01",
		"XP6_CMP",
		"XP7_Valley"
	);
	$to4   =	array(
		"Zavod 311",
		"Lancang Dam",
		"Flood Zone",
		"Golmud Railway",
		"Paracel Storm",
		"Operation Locker",
		"Hainan Resort",
		"Siege of Shanghai",
		"Rogue Transmission",
		"Dawnbreaker",
		//----SECOND ASSAULT---,
		"Caspian Border",
		"Operation Firestorm",
		"Operation Metro",
		"Gulf of Oman",
		//----CHINA RISING---,
		"Silk Road",
		"Altai Range",
		"Guilin Peaks",
		"Dragon Pass",
		//----NAVAL STRIKE---,
		"Lost Islands",
		"Nansha Strike",
		"Wavebreaker",
		"Operation Mortar",
		//----DRAGON's TEETH---,
		"Pearl Market",
		"Propaganda",
		"Lumphini Gardern",
		"Sunken Dragon",
		//----FINAL STAND---,
		"Operation Whiteout",
		"Hammerhead",
		"Hangar 21",
		"Giants Of Karelia",
		"Zavod:Graveyard Shift",
		"Operation Outbreak",
		"Dragon Valley 2015"
	);

	if ($game == 3) {
		$replaced = str_ireplace($from3, $to3, $text);
	} elseif ($game == 4) {
		$replaced = str_ireplace($from4, $to4, $text);
	}

	return $replaced;
}