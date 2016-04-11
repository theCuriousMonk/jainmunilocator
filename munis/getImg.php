<?php
//Function to get url of muni image
function getImg($id) {
	global $db;
	$m = $db->prepare("SELECT * FROM munishri WHERE id = ?");
	$m->execute(array($id));
	if($m->rowCount() == 1) {
		$row = $m->fetch(PDO::FETCH_ASSOC);		
		$name = $row['name'];
		$imgName = $name;
		$alias = $row['alias'];
		if ($alias != "") {
			$imgAlias = str_replace(array( '(', ')' ), '', $alias);
			$imgName = $imgName.'_'.$imgAlias;
		}
		$imgName = strtolower($imgName);
		$imgName = preg_replace('/\s+/', '', $imgName);
		
		if (file_exists("munis/uploads/{$imgName}.jpg")) {
			$img = "munis/uploads/{$imgName}.jpg";
		} else {
			$img = 'na.png';
		}
		return $img;
	} else {
		return "na.png";
	}
}

?>