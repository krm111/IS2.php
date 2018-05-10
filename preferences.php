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
    <title>Preferences</title>
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/preferences.css">
</head>
<body>
    <div id="principal">
        <!-- Header -->
        <div id="ipage">
            <p style="font-size: 30px">Preferences</p>
        </div>
        <div class="clearipage"></div>
        <!-- Buttons -->
        <div id="mid">
            <table style="margin-left: 580px">
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="window.location.href='income.html'">Income</button></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="window.location.href='expenses.html'">Expenses</button></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="window.location.href='familybonding.html'">Family Bonding</button></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="window.location.href='familycode.html'">Family Code</button></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center"><button type="button" onclick="alert('Download Report')">Download Report</button></td>
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
