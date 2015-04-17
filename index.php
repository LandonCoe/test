<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Rambla">


<title>Urfament</title>

</head>

<body>
<?php include 'update.php'; 
?>

	<div class="row">
   		<div class="col-2"> </div>
        <div class="col-8"><h1>"And unto me, a champion shall be named"--Urf the Manatee</h1></div>
        <div class="col-2"> </div>
    </div>
    
    <div class="row">
   		<div class="col-2"> </div>
        <div class="col-1"> <img class="championsleft" src="images/numbers/number1.png" alt="Number 1"></div>
        <div class="col-1"><img class="championsleft" src="images/1.png" alt="championname"></div>
        <div class="col-1"><br><span id=stats><?php echo $_SESSION['champion1wins']." Wins"; ?> <br> <?php echo $_SESSION['champion1games']." Games"; ?><br> <?php echo $_SESSION['champion1winpct']."%"; ?></span><br></div>
        <div class="col-2"> </div>
        <div class="col-1" ><br><span id=stats><?php echo $_SESSION['champion6wins']." Wins"; ?> <br> <?php echo $_SESSION['champion6games']." Games"; ?><br> <?php echo $_SESSION['champion6winpct']."%"; ?></span><br></div>
        <div class="col-1"> <img class="championsright" src="images/6.png" alt="championname"></div>
        <div class="col-1"> <img class="championsleft" src="images/numbers/number6.png" alt="Number 6"></div>
        <div class="col-2"> </div>
    </div>
    
    <div class="row">
   		<div class="col-2"> </div>
        <div class="col-1"> <img class="championsleft" src="images/numbers/number2.png" alt="Number 2"></div>
        <div class="col-1"><img class="championsleft" src="images/2.png" alt="championname"></div>
        <div class="col-1"> <br><span id=stats><?php echo $_SESSION['champion2wins']." Wins"; ?> <br> <?php echo $_SESSION['champion2games']." Games"; ?><br> <?php echo $_SESSION['champion2winpct']."%"; ?></span><br></div>
        <div class="col-2"> </div>
        <div class="col-1"> <br><span id=stats><?php echo $_SESSION['champion7wins']." Wins"; ?> <br> <?php echo $_SESSION['champion7games']." Games"; ?><br> <?php echo $_SESSION['champion7winpct']."%"; ?></span><br></div>
        <div class="col-1"> <img class="championsright" src="images/7.png" alt="championname"></div>
        <div class="col-1"> <img class="championsleft" src="images/numbers/number7.png" alt="Number 7"></div>
        <div class="col-2"> </div>
    </div>
    
    <div class="row">
   		<div class="col-2"> </div>
        <div class="col-1"><img class="championsleft" src="images/numbers/number3.png" alt="Number 3"></div>
        <div class="col-1"><img class="championsleft" src="images/3.png" alt="championname"></div>
        <div class="col-1"> <br><span id=stats><?php echo $_SESSION['champion3wins']." Wins"; ?> <br> <?php echo $_SESSION['champion3games']." Games"; ?><br> <?php echo $_SESSION['champion3winpct']."%"; ?></span><br></div>
        <div class="col-2"> </div>
        <div class="col-1"> <br><span id=stats><?php echo $_SESSION['champion8wins']." Wins"; ?> <br> <?php echo $_SESSION['champion8games']." Games"; ?><br> <?php echo $_SESSION['champion8winpct']."%"; ?></span><br></div>
        <div class="col-1"> <img class="championsright" src="images/8.png" alt="championname"></div>
        <div class="col-1"> <img class="championsleft" src="images/numbers/number8.png" alt="Number 8"></div>
        <div class="col-2"> </div>
    </div>
    
    <div class="row">
   		<div class="col-2"> </div>
        <div class="col-1"> <img class="championsleft" src="images/numbers/number4.png" alt="Number 4"></div>
        <div class="col-1"><img class="championsleft" src="images/4.png" alt="championname"></div>
        <div class="col-1"><br><span id=stats><?php echo $_SESSION['champion4wins']." Wins"; ?> <br> <?php echo $_SESSION['champion4games']." Games"; ?><br> <?php echo $_SESSION['champion4winpct']."%"; ?></span><br></div>
        <div class="col-2"> </div>
        <div class="col-1"> <br><span id=stats><?php echo $_SESSION['champion9wins']." Wins"; ?> <br> <?php echo $_SESSION['champion9games']." Games"; ?><br> <?php echo $_SESSION['champion9winpct']."%"; ?></span><br></div>
        <div class="col-1"> <img class="championsright" src="images/9.png" alt="championname"></div>
        <div class="col-1"> <img class="championsleft" src="images/numbers/number9.png" alt="Number 9"></div>
        <div class="col-2"> </div>
    </div>

    <div class="row">
   		<div class="col-2"> </div>
        <div class="col-1"> <img class="championsleft" src="images/numbers/number5.png" alt="Number 5"></div>
        <div class="col-1"><img class="championsleft" src="images/5.png" alt="championname"></div>
        <div class="col-1"><br><span id=stats><?php echo $_SESSION['champion5wins']." Wins"; ?> <br> <?php echo $_SESSION['champion5games']." Games"; ?><br> <?php echo $_SESSION['champion5winpct']."%"; ?></span><br></div>
        <div class="col-2"> </div>
        <div class="col-1"><br><span id=stats><?php echo $_SESSION['champion10wins']." Wins"; ?> <br> <?php echo $_SESSION['champion10games']." Games"; ?><br> <?php echo $_SESSION['champion10winpct']."%"; ?></span><br></div>
        <div class="col-1"> <img class="championsright" src="images/10.png" alt="championname"></div>
        <div class="col-1"> <img class="championsleft" src="images/numbers/number10.png" alt="Number 10"></div>
        <div class="col-2"> </div>
    </div>
    
    
			

      



</body>
</html>
