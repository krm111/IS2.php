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
    <title>Family Bonding</title>
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/familybonding.css">
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
            <p style="font-size: 30px">Family Bonding</p>
        </div>
        <div class="clearipage"></div>
        <!-- Information -->
        <div id="mid">
            <table style="margin-left: 428px">
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center">Family members must enter this code to access the same account</td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><input name="txt_code" maxlength="50" style="width:200px;" type="text"></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="alert('Generate Code')">Generate Code</button></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
            </table>
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
