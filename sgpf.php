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
    <title>SGPF</title>
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/sgpf.css">
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
            <p style="font-size: 30px">SGPF</p>
        </div>
        <div class="clearipage"></div>
        <div id="mid">
            <div id ="midl">
                <br>
                <br>
                <!-- Graphic (Income-Expenses) -->
                <table style="float: left; margin-left: 100px">
                    <tr>
                        <td><canvas id="show" width="100" height="400" style="border:1px solid #000000;">
</canvas></td>
                    </tr>
                    <tr>
                        <td style="text-align: center"><button type="button" onclick="alert('Currency')">Currency</button></td>
                    </tr>
                </table>
                <!-- DATA (Income-Expenses) -->
                <table style="float: right; margin-right: 300px; margin-top: 150px">
                    <tr>
                        <td>Income</td>
                    </tr>
                    <tr>
                        <td>Expenses</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                    </tr>
                </table>
            </div>
            <div id="midr">
                <br>
                <br>
                <br>
                <br>
                <!-- Buttons (New(Income,Expense),Summary) -->
                <table style="margin-left: 220px">
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td style="text-align: center"><button type="button" onclick="window.location.href='newincome.php'">New Income</button></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td style="text-align: center"><button type="button" onclick="window.location.href='newexpense.php'">New Expense</button></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td style="text-align: center"><button type="button" onclick="window.location.href='summary.php'">Summary</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="clearmid"></div>
        <!-- Footer -->
        <div id="fpage">
            <p>Hacemos Software</p>
        </div>
    </div>
</body>
</html>
