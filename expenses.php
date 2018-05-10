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
    <title>Expenses</title>
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/expenses.css">
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
            <p style="font-size: 30px">Expenses</p>
        </div>
        <div class="clearipage"></div>
        <!-- Data (Expenses) -->
        <div id="mid">
            <p style="font-size: 30px; text-align: center">April 2018</p>
            <table style="margin-left: 11px;  width: 100%">
                <tr>
                    <th style="text-align: center">Expense</th>
                    <th style="text-align: center">Amount</th>
                    <th style="text-align: center">Date</th>
                </tr>
                <tr>
                    <td style="text-align: center">Light</td>
                    <td style="text-align: center">S/.100</td>
                    <td style="text-align: center">05/04/2018</td>
                </tr>
                <tr>
                    <td style="text-align: center">Water</td>
                    <td style="text-align: center">S/.50</td>
                    <td style="text-align: center">05/04/2018</td>
                </tr>
                <tr>
                    <td style="text-align: center">Food</td>
                    <td style="text-align: center">S/.500</td>
                    <td style="text-align: center">05/04/2018</td>
                </tr>
                <tr>
                    <td style="text-align: center">Internet</td>
                    <td style="text-align: center">S/.80</td>
                    <td style="text-align: center">05/04/2018</td>
                </tr>
                <tr>
                    <td style="text-align: center">Transport</td>
                    <td style="text-align: center">S/.200</td>
                    <td style="text-align: center">05/04/2018</td>
                </tr>
                <tr>
                    <td style="text-align: center">Health</td>
                    <td style="text-align: center">S/.20</td>
                    <td style="text-align: center">05/04/2018</td>
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
