<?php
	//Conecta con la base de datos
	require_once('class/dbconfig.php');
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
    <title>New Income</title>
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/newincome.css">
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
            <p style="font-size: 30px">New Income</p>
        </div>
        <div class="clearipage"></div>
        <!-- Add Income -->
        <div id="mid">
            <div id ="midl">
                <br>
                <br>
                <form action="newincome.php" method="POST">
		            <table style="margin-left: 100px">
		                <tr>
		                    <td colspan="2">Amount</td>
		                </tr>
		                <tr>
		                    <td>S/.</td>
		                    <td><input name="amount" maxlength="64" style="width:200px;" type="text"></td>
		                </tr>
		                <tr>
		                    <td colspan="2">Type</td>
		                </tr>
		                <tr>
		                    <td colspan="2"><input name="type" maxlength="64" style="width:200px;" type="text"></td>
		                </tr>
		                <tr>
		                    <td colspan="2">Date</td>
		                </tr>
		                <tr>
		                    <td colspan="2"><input name="date" maxlength="64" style="width:200px;" type="text"></td>
		                </tr>
		                <tr>
		                    <td><br></td>
		                    <td><br></td>
		                </tr>
		                <tr>
		                    <td><br></td>
		                    <td><br></td>
		                </tr>
		                <tr>
		                    <td style="text-align: center"><button type="button" onclick="window.location.href='sgpf.php'">Back</button></td>
		                    <td style="text-align: center"><input name="newincome" type="submit" value="Add"></td>
		                </tr>
		            </table>
                </form>
                <?php
					if(isset($_POST['newincome']))
					{
						@$amount=$_POST['amount'];
						@$type=$_POST['type'];
						@$date=$_POST['date'];
						@$id_user=$_SESSION['id_user'];
				

						$query = "INSERT INTO Income (Amount,Type,Date,ID_User) VALUES('$amount','$type','$date','$id_user')";
						$query_run = mysqli_query($con,$query);
						if($query_run)
						{
							echo '<script type="text/javascript">alert("Registered Income")</script>';
						}
						else
						{
							echo '<script type="text/javascript">alert("Server Error")</script>';
						}
					}
					else
					{
					}
				?>
            </div>
            <div id="midr">
                <script type="text/javascript" src="js/calc.js"></script>
                <div style="width:600px;margin:auto;">
                    <!-- Entry -->
                    <div style="width:600px;height:120px;float:left;border:2px solid;border-radius:5px;">
                        <div style="width:580px;margin-left:10px;margin-top:10px;float:left;">
                            <b>Entry:</b>
                        </div>
                        <div style="width:570px;margin-left:10px;float:left;">
                            <input id="txt_entry" type="text" style="width:100%;" onkeydown="identification_key(event)" autofocus>
                        </div>
                        <div style="width:580px;margin-left:10px;margin-bottom:10px;float:left;color:blue;">
				            <p id="p_string"></p>
                        </div>
                    </div>
                    <!-- Result -->
                    <div style="width:160px;height:120px;float:right;border:2px solid;border-radius:5px;">
                        <div style="width:140px;margin-left:10px;margin-top:10px;float:left;">
                            <b>Result:</b>
                        </div>
                        <div style="width:140px;margin-left:10px;float:left;text-align:center;color:blue;font-size:23px;">
                            <p id="p_result">0</p>
                        </div>
                    </div>
                    <!-- Buttons (Calculator) -->
                    <div style="width:314px;height:170px;float:left;margin-top:10px;border:2px solid;border-radius:5px;">
                        <br>
                        <table>
                            <tr>
                                <td> <BUTTON id="7" onclick="key('7')">7</BUTTON></td>
                                <td> <BUTTON id="8" onclick="key('8')">8</BUTTON></td>
                                <td> <BUTTON id="9" onclick="key('9')">9</BUTTON></td>
                                <td colspan="2"> <BUTTON id="DEL" onclick="del()">DEL</BUTTON></td>
                            </tr>
                            <tr>
                                <td> <BUTTON id="4" onclick="key('4')">4</BUTTON></td>
                                <td> <BUTTON id="5" onclick="key('5')">5</BUTTON></td>
                                <td> <BUTTON id="6" onclick="key('6')">6</BUTTON></td>
                                <td> <BUTTON id="*" onclick="key('*')">*</BUTTON></td>
                                <td> <BUTTON id="/" onclick="key('/')">/</BUTTON></td>
                            </tr>
                            <tr>
                                <td> <BUTTON id="1" onclick="key('1')">1</BUTTON></td>
                                <td> <BUTTON id="2" onclick="key('2')">2</BUTTON></td>
                                <td> <BUTTON id="3" onclick="key('3')">3</BUTTON></td>
                                <td> <BUTTON id="+" onclick="key('+')">+</BUTTON></td>
                                <td> <BUTTON id="-" onclick="key('-')">-</BUTTON></td>
                            </tr>
                            <tr>
                                <td> <BUTTON id="0" onclick="key('0')">0</BUTTON></td>
                                <td> <BUTTON id="." onclick="key('.')">.</BUTTON></td>
                                <td colspan="3"> <BUTTON id="=" onclick="calculate()">ENTER</BUTTON></td>
                            </tr>
                        </table>
                    </div>
                </div>
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
