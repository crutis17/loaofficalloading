<?php
	$id = $_GET["steamid"];
	
	$url = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $id;
	$json = file_get_contents($url);
	$table2 = json_decode($json, true);
	$table = $table2["response"]["players"][0];
	
	$username = $table['personaname'];
	$profileimg = '<img src="'.$table['avatarfull'].'"></img>'; 
	$location = $table['loccountrycode'];
?>