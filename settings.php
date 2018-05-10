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
    <title>Settings</title>
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/settings.css">
</head>
<body>
    <div id="principal">
        <!-- Header -->
        <div id="ipage">
            <p style="font-size: 30px">Settings</p>
        </div>
        <div class="clearipage"></div>
        <!-- Buttons -->
        <div id="mid">
            <table style="margin-left: 560px">
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="alert('Languaje')">Languaje</button></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="alert('Change Password')">Change Password</button></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="alert('Color')">Color</button></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="alert('Font')">Font</button></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="window.location.href='logout.php'">Log Out</button></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><input type="checkbox">
                    <label style="font-size: 15px">Reminders for data entry</label></td>
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
