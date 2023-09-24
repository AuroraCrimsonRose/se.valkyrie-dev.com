<?php
$serverIP = '74.114.6.106';
$serverPort = '27016';

$url = "https://api.steampowered.com/ISteamApps/GetServersAtAddress/v1/?addr=$serverIP:$serverPort";

$response = file_get_contents($url);

$data = json_decode($response, true);

if (isset($data['response']['servers'][0]['players'])) {
    $playerCount = $data['response']['servers'][0]['players'];
    echo $playerCount; // Just the player count
} else {
    echo "0"; // Return 0 if unable to fetch player count
}
?>
