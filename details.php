<?php
	//VERIFICA SI SE HA INICIADO SESION
	session_start();
	$user = isset($_SESSION['email']) ? $_SESSION['email'] : null;
	
	if($user == '') {
		header('Location: http://localhost/SGPF/index.php?error=No Session');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Details</title>
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/details.css">
</head>
<body>
    <div id="principal">
        <!-- Header -->
        <div id="ipage">
            <a href="preferences.php">
                <img src="img/menu-icon.png" alt="preferences" style="width:64px;height:64px;border:0;float:left;margin:18px;">
            </a>
            <a href="settings.php">
                <img src="img/settings-icon.png" alt="settings" style="width:64px;height:64px;border:0;float:right;margin:18px;">
            </a>
            <p style="font-size: 30px">Details</p>
        </div>
        <div class="clearipage"></div>
        <!-- Graphic -->
        <div id="mid">
            <div style="float: right; margin-right: 900px"><canvas id="myCanvas" style="background: white;"></canvas>
            <legend for="myCanvas"></legend>
            <script type="text/javascript" src="js/details.js"></script>
            </div>
            <!-- Button Home -->
            <div class="home"><button type="button" onclick="window.location.href='sgpf.php'">Home</button></div>
        </div>
        <div class="clearmid"></div>
        <!-- Footer -->
        <div id="fpage">
            <p>Hacemos Software</p>
        </div>
    </div>
</body>
</html>
