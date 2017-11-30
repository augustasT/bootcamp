<?php 
	
	// $country = "Lietuva";
	// $city = "Vilnius";
	// $population = 574221;
	// $largest_population = true;
	
	// echo "
		// <ul>
			// <li> $country </li>
			// <li> $city </li>
			// <li> $population </li>
		// </ul>
	// ";
	
	
	
	// echo $city.' - Lietuvos sostine <br>';
	// echo "$city ir $country sparciai auga <br>";
	
	// $cities = array('Berlynas', 'Roma', 'Londonas');
	// $cities[] = 'Tokijas';
	
	// $aArray = array(
		// 'Tokijas' => 13.6,
		// 'Vasingtonas' => 0.6,
		// 'Maskva' => 11.5,
	// );
	
	// $aArray['Londonas'] = 8.6;
	
	// print_r($cities);
	
	// echo "<ul>";
		// for($i=0; $i<sizeof($cities); $i++){
			// echo "<li>".$cities[$i]."</li>";
		// }		
	// echo "</ul>";
	
	// echo "<ul>";
		// foreach($aArray as $city =>$number){
			// echo "<li>".$city." gyventoju skaicius: ".$number."</li>";
		// }		
	// echo "</ul>";
	
	// $cities = array(
		// 'Tokijas' => array(13.6, 1868, 'Japonija'), 
		// 'Vasingtonas' => array(0.6, 1790, 'JAV'),
		// 'Maskva' => array(11.5,1147, 'Rusija'),		
	// );
	// $cities['Londonas'] = array(8.6, 43, 'Anglija');
	
	
	// echo "Londonas:
	// <ul>
		// <li>Gyventoju skaicius: ".$cities['Londonas'][0]."</li>
		// <li>Ikurtas: ".$cities['Londonas'][1]."</li>
		// <li>Salis: ".$cities['Londonas'][2]."</li>
	// </ul>";
	
	// echo "<ul>";
		// foreach($cities as $city =>$info){
			// echo $city.":";
			// echo "<li>Gyventoju skaicius: ".$info[0]."</li>
					// <li>Ikurtas: ".$info[1]."</li>
					// <li>Salis: ".$info[2]."</li>
					// <br><br>
			// ";
			
		// }
		
	// echo "</ul>";
	
	// $metai = 1774;
	
	
		// if($metai >= $cities['Vasingtonas'][1]){
			// echo "Vasingtonas yra jav sostine";			
		// }
		// else if($metai == 1774){
			// echo "JAV sostinė vis dar Filadelfijoje." ;			
		// }
		// else{
			// echo "Liko ".($cities['Vasingtonas'][1] - $metai)." metu iki vasingtono ikurimo";
		// }

		
	$cities = array('Tokijas', 'Vasingtonas', 'Maskva', 'Londonas');	
	
	echo "<ul>";
	
	for($i=0; $i<count($cities);$i++){
		echo "<li>$cities[$i]</li>";		
	}	
	echo "<br>";
	
	foreach($cities as $city){
		echo "<li>$city</li>";
	}
	
	
	echo "</ul>";
		
		
		
	
	
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description">
	<title>PHP demo</title>
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
	
		
	<script> 
	</script>
	


</head>
<body>

</body>
</html>
