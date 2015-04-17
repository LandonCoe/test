<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
</head>

<body>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "urfament";
$api_key="90fb56bb-2c77-4db6-826d-1fa9a61cd53f";
set_time_limit(0);
//$currentEpoch = time();
$conn = new mysqli($servername, $username, $password, $db);


$sql = "select epoch from epoch";
$getEpoch = mysqli_fetch_assoc(mysqli_query($conn, "select epoch from epoch ORDER BY epoch DESC LIMIT 1"));
$lastEpoch = $getEpoch['epoch'];
$updateEpoch=$lastEpoch+300;
$currentEpoch=$lastEpoch+300;

while ( $currentEpoch >= $updateEpoch)
{
	$matchIdLink="https://na.api.pvp.net/api/lol/na/v4.1/game/ids?beginDate=".$updateEpoch."&api_key=".$api_key;
	$jsonData = file_get_contents($matchIdLink);
	$phpArray = json_decode($jsonData, true);
	

foreach ($phpArray as $key => $value) { 



$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("<p>Connection failed: </p>" . $conn->connect_error);
} 
echo "";

$matchDataLink="https://na.api.pvp.net/api/lol/na/v2.2/match/".$value."?includeTimeline=false&api_key=".$api_key;
$matchData = file_get_contents($matchDataLink);
$data = json_decode($matchData,true);

$p_key=$data['matchId'];

$champion_0=$data['participants'][0]['championId'];
$champion_0_win=$data['participants'][0]['stats']['winner'];

$champion_1=$data['participants'][1]['championId'];
$champion_1_win=$data['participants'][1]['stats']['winner'];

$champion_2=$data['participants'][2]['championId'];
$champion_2_win=$data['participants'][2]['stats']['winner'];

$champion_3=$data['participants'][3]['championId'];
$champion_3_win=$data['participants'][3]['stats']['winner'];

$champion_4=$data['participants'][4]['championId'];
$champion_4_win=$data['participants'][4]['stats']['winner'];

$champion_5=$data['participants'][5]['championId'];
$champion_5_win=$data['participants'][5]['stats']['winner'];

$champion_6=$data['participants'][6]['championId'];
$champion_6_win=$data['participants'][6]['stats']['winner'];

$champion_7=$data['participants'][7]['championId'];
$champion_7_win=$data['participants'][7]['stats']['winner'];

$champion_8=$data['participants'][8]['championId'];
$champion_8_win=$data['participants'][8]['stats']['winner'];

$champion_9=$data['participants'][9]['championId'];
$champion_9_win=$data['participants'][9]['stats']['winner'];	

if (empty($champion_0_win)){
	$champion_0_win='0';
}

if (empty($champion_1_win)){
	$champion_1_win='0';
}

if (empty($champion_2_win)){
	$champion_2_win='0';
}
if (empty($champion_3_win)){
	$champion_3_win='0';
}
if (empty($champion_4_win)){
	$champion_4_win='0';
}
if (empty($champion_5_win)){
	$champion_5_win='0';
}
if (empty($champion_6_win)){
	$champion_6_win='0';
}
if (empty($champion_7_win)){
	$champion_7_win='0';
}
if (empty($champion_8_win)){
	$champion_8_win='0';
}
if (empty($champion_9_win)){
	$champion_9_win='0';
}

$sql = "INSERT INTO master (match_id, champion_0_id, champion_1_id, champion_2_id, champion_3_id, champion_4_id, champion_5_id, champion_6_id, champion_7_id, champion_8_id, champion_9_id)
VALUES ($p_key, $champion_0, $champion_1, $champion_2, $champion_3, $champion_4, $champion_5, $champion_6, $champion_7, $champion_8, $champion_9);";

$sql .= "INSERT INTO win_loss (match_id, champion_0_win, champion_1_win, champion_2_win, champion_3_win, champion_4_win, champion_5_win, champion_6_win, champion_7_win, champion_8_win, champion_9_win)
VALUES ($p_key, $champion_0_win, $champion_1_win, $champion_2_win, $champion_3_win, $champion_4_win, $champion_5_win, $champion_6_win, $champion_7_win, $champion_8_win, $champion_9_win);";

if (mysqli_multi_query($conn, $sql)) {
    //echo "";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();


sleep(2);
}

$conn = new mysqli($servername, $username, $password, $db);
mysqli_query($conn,"INSERT INTO epoch (epoch) VALUES ({$updateEpoch})");
$updateEpoch=$updateEpoch+300;

}

$conn = new mysqli($servername, $username, $password, $db);

$sql="select championId, sum(TotWins) as OutputWins, sum(TotGames) as OutputGames, (sum(TotWins)/sum(TotGames))as WinPct
from(

select championId, sum(TotalWins) as TotWins, 0 as TotGames
from(

select
master.champion_0_id as championId, count(win_loss.champion_0_win) as TotalWins
from master, win_loss
where master.match_id = win_loss.match_id and win_loss.champion_0_win=1
group by championid

union all

select
master.champion_1_id as championId, count(win_loss.champion_1_win) as TotalWins
from master, win_loss
where master.match_id = win_loss.match_id and win_loss.champion_1_win=1
group by championid

union all

select
master.champion_2_id as championId, count(win_loss.champion_2_win) as TotalWins
from master, win_loss
where master.match_id = win_loss.match_id and win_loss.champion_2_win=1
group by championid

union all

select
master.champion_3_id as championId, count(win_loss.champion_3_win) as TotalWins
from master, win_loss
where master.match_id = win_loss.match_id and win_loss.champion_3_win=1
group by championid

union all

select
master.champion_4_id as championId, count(win_loss.champion_4_win) as TotalWins
from master, win_loss
where master.match_id = win_loss.match_id and win_loss.champion_4_win=1
group by championid

union all

select
master.champion_5_id as championId, count(win_loss.champion_5_win) as TotalWins
from master, win_loss
where master.match_id = win_loss.match_id and win_loss.champion_5_win=1
group by championid

union all

select
master.champion_6_id as championId, count(win_loss.champion_6_win) as TotalWins
from master, win_loss
where master.match_id = win_loss.match_id and win_loss.champion_6_win=1
group by championid

union all

select
master.champion_7_id as championId, count(win_loss.champion_7_win) as TotalWins
from master, win_loss
where master.match_id = win_loss.match_id and win_loss.champion_7_win=1
group by championid

union all

select
master.champion_8_id as championId, count(win_loss.champion_8_win) as TotalWins
from master, win_loss
where master.match_id = win_loss.match_id and win_loss.champion_8_win=1
group by championid

union all

select
master.champion_9_id as championId, count(win_loss.champion_9_win) as TotalWins
from master, win_loss
where master.match_id = win_loss.match_id and win_loss.champion_9_win=1
group by championid


) 
as WinSummary
group by championid

union all

select championId, 0 as TotWins, sum(TotalGames) as TotGames
from(

select master.champion_0_id as ChampionId,	count(master.champion_0_id) as TotalGames
from master
group by ChampionId

union all

select master.champion_1_id as ChampionId,	count(master.champion_1_id) as TotalGames
from master
group by ChampionId

union all

select master.champion_2_id as ChampionId,	count(master.champion_2_id) as TotalGames
from master
group by ChampionId

union all

select master.champion_3_id as ChampionId,	count(master.champion_3_id) as TotalGames
from master
group by ChampionId

union all

select master.champion_4_id as ChampionId,	count(master.champion_4_id) as TotalGames
from master
group by ChampionId

union all

select master.champion_5_id as ChampionId,	count(master.champion_5_id) as TotalGames
from master
group by ChampionId

union all

select master.champion_6_id as ChampionId,	count(master.champion_6_id) as TotalGames
from master
group by ChampionId

union all

select master.champion_7_id as ChampionId,	count(master.champion_7_id) as TotalGames
from master
group by ChampionId

union all

select master.champion_8_id as ChampionId,	count(master.champion_8_id) as TotalGames
from master
group by ChampionId

union all

select master.champion_9_id as ChampionId,	count(master.champion_9_id) as TotalGames
from master
group by ChampionId


) as GameSummary
group by ChampionId
) as OutputSummary

group by ChampionId
order by WinPct desc
limit 10
;";

$championrankingresult=mysqli_query($conn,$sql);
$x=1;

while ($data = mysqli_fetch_assoc($championrankingresult)){
	
$filename="C:\Users\Landon Coe\Desktop\Portfolio HTMl\urfament\images\\{$x}.png";

$imagelocation="C:\Users\Landon Coe\Desktop\Portfolio HTMl\urfament\images\champions\\{$data['championId']}.png";

$championwins="champion".$x."wins";
$championgames="champion".$x."games";
$championwinpct="champion".$x."winpct";

$_SESSION[$championwins]=$data['OutputWins'];
$_SESSION[$championgames]=$data['OutputGames'];
$_SESSION[$championwinpct]=$data['WinPct']*100;

file_put_contents($filename,fopen($imagelocation, 'r'));

$x++;
}

session_destroy(); 
?>




</body>
</html>