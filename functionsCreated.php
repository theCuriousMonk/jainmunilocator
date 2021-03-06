<?php

// Load Configuration File
include 'config.php';

//Function to find muni details
function getmuni($id)
{
	global $db;
	$m = $db->prepare("SELECT * FROM munishri, upadhis WHERE id = ? AND approved=1 AND uid=upadhi");
	$m->execute(array($id));
	if($m->rowCount() == 1)
	{
		$n = $m->fetch(PDO::FETCH_ASSOC);
		if($n['alias'] == "") {$t = $n['uname'].' '.$n['prefix'].' '.$n['name'].' '.$n['suffix'];}
		else {$t = $n['uname'].' '.$n['prefix'].' '.$n['name'].' '.$n['suffix'].' '.$n['alias'];}
		return $t;
	}
	else
	{
		return "N/A";
	}
}

//Function to get url of muni image
function getImg($id)
{
	global $db;
	$m = $db->prepare("SELECT img FROM munishri WHERE id = ?");
	$m->execute(array($id));
	if($m->rowCount() == 1) {
		$n = $m->fetch(PDO::FETCH_ASSOC);
		$t = $n['img'];
		return $t;
	} else {
		return "na.png";
	}
}

//Function to find location address from coordinates
function getaddress($lat,$lng){
	$url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false';
	$json = @file_get_contents($url);
	$data=json_decode($json);
	$status = $data->status;
	if($status=="OK") {
	return $data->results[0]->formatted_address;
	} else {
		return "N/A";
		//alert('Geocoder failed due to: ' + status);
	}
}

//Function to find latitude from location address
function getlatitude($address) {
	$address= preg_replace('/\s+/', '+', $address);
	$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=India";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$response = curl_exec($ch);
	curl_close($ch);
	$response_a = json_decode($response);
	return $response_a->results[0]->geometry->location->lat;
}

//Function to find longitude from location address
function getlongitude($address) {
	$address= preg_replace('/\s+/', '+', $address);
	$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=India";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$response = curl_exec($ch);
	curl_close($ch);
	$response_a = json_decode($response);
	return $response_a->results[0]->geometry->location->lng;
}

//Function to get the guru details
function getguru($id)
{
	global $db;
	$m = $db->prepare("SELECT * FROM munishri, aryika, kshullak, ailak, muni, upadhyay, ailacharya, acharya WHERE id = ? AND approved=1 AND id=aryikaid AND id=kid AND id=ailakid AND id=muniid AND id=upadhyayid AND id=ailacharyaid AND id=acharyaid");
	$m->execute(array($id));
	if($m->rowCount() == 1)
	{
		$n = $m->fetch(PDO::FETCH_ASSOC);
		if($n['upadhi'] == 1) $t = $n['aguru'];
		if($n['upadhi'] == 2) $t = $n['ailacharyaguru'];
		if($n['upadhi'] == 3) $t = $n['upadhyayguru'];
		if($n['upadhi'] == 4) $t = $n['muniguru'];
		if($n['upadhi'] == 5) $t = $n['ailakguru'];
		if($n['upadhi'] == 6) $t = $n['kguru'];
		if($n['upadhi'] == 7) $t = $n['aryikaguru'];
		return $t;
	}
	else
	{
		return "N/A";
	}
}

//Mobile detection
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
