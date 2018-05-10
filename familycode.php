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
    <title>Family Code</title>
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/familycode.css">
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
            <p style="font-size: 30px">Family Code</p>
        </div>
        <div class="clearipage"></div>
        <!-- Information -->
        <div id="mid">
            <br>
            <br>
            <table style="margin-left: 510px">
                    <tr>
                        <td>Code:</td>
                    </tr>
                    <tr>
                        <td><input name="txt_code" maxlength="50" style="width:250px;" type="text"></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                    </tr>
                    <tr>
                        <td><input name="txt_name" maxlength="50" style="width:250px;" type="text"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                    <tr>
                        <td style="text-align: center"><button type="button" onclick="alert('Access')">Access</button></td>
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
