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
    <title>Summary</title>
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/summary.css">
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
            <p style="font-size: 30px">Summary</p>
        </div>
        <div class="clearipage"></div>
        <div id="mid">
            <!-- Month 1 -->
            <div id ="midl">
                <br>
                <br>
                <table style="margin-left: 100px">
                    <tr>
                        <td colspan="2" style="text-align: center">March 2018</td>
                    </tr>
                    <tr>
                        <td colspan="2"><canvas id="Canvas1" width="300" height="300" style="border:1px solid transparent;"></canvas><script>
var c = document.getElementById("Canvas1");
var ctx = c.getContext("2d");
ctx.beginPath();
ctx.arc(150,150,150,0,2*Math.PI);
ctx.stroke();
</script></td>
                    </tr>
                    <tr>
                        <td style="text-align: center"><a href="#" class="previous">&laquo; Previous</a>
                        </td>
                        <td style="text-align: center">
<a href="#" class="next">Next &raquo;</a></td>
                    </tr>
                </table>
                <!-- Button Home -->
                <div class="home"><button type="button" onclick="window.location.href='sgpf.php'">Home</button></div>
            </div>
            <!-- Month 2 -->
            <div id="midr">
                <br>
                <br>
                <table style="margin-left: 100px">
                    <tr>
                        <td colspan="2" style="text-align: center">April 2018</td>
                    </tr>
                    <tr>
                        <td colspan="2"><canvas id="myCanvas"></canvas>
                            <script type="text/javascript" src="js/summary.js"></script></td>
                    </tr>
                    <tr>
                        <td style="text-align: center"><a href="#" class="previous">&laquo; Previous</a>
                        </td>
                        <td style="text-align: center">
<a href="#" class="next">Next &raquo;</a></td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
                    <!-- Button Details -->
                    <tr>
                        <td colspan="2" style="text-align: center"><button type="button" onclick="window.location.href='details.php'">Details</button></td>
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
