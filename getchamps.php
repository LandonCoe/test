<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "urfament";
set_time_limit(0);

$champion_pics='https://global.api.pvp.net/api/lol/static-data/na/v1.2/champion?champData=image&api_key=90fb56bb-2c77-4db6-826d-1fa9a61cd53f';
$jsonData = file_get_contents($champion_pics);
$phpArray = json_decode($jsonData,true);
$data = $phpArray['data'];

foreach ($data as $key => $value) {
	$conn = new mysqli($servername, $username, $password, $db);
	$champion_id=$data[$key]['id'];
	$champion_name=$key;
	settype ($champion_name, "string");
	
	echo $champion_name."<br>";
	
	$sql= "INSERT INTO champions (champion_id, champion_name)
	VALUES($champion_id, '$champion_name');";
	
	
	if (mysqli_multi_query($conn, $sql)) {
    	echo "New records created successfully";
} 	else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	//file_put_contents("{$data[$key]['id']}.png", fopen("http://ddragon.leagueoflegends.com/cdn/5.7.2/img/champion/".$key.".png", 'r'));
	$conn->close();
}




?>
</body>
</html>