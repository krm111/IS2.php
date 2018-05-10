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
    <title>New Expense</title>
	<link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/newincome.css">
</head>
<body>
    <div id="principal">
        <div id="ipage">
            <a href="preferences.php">
                <img src="img/menu-icon.png" alt="preferences" style="width:64px;height:64px;border:0;float:left;margin:18px;">
            </a>
            <a href="settings.php">
                <img src="img/settings-icon.png" alt="settings" style="width:64px;height:64px;border:0;float:right;margin:18px;">
            </a>
            <p style="font-size: 30px">New Expense</p>
        </div>
        <div class="clearipage"></div>
        <div id="mid">
            <div id ="midl">
                <br>
                <br>
                <table style="margin-left: 100px">
                    <tr>
                        <td colspan="2">Value</td>
                    </tr>
                    <tr>
                        <td>S/.</td>
                        <td><input name="txt_value" maxlength="50" style="width:200px;" type="text"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: left"><button type="button" onclick="alert('Add')">Add</button></td>
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
                        <td style="text-align: center"><button type="button" onclick="window.location.href='sgpf.php'">Cancel</button></td>
                        <td style="text-align: center"><button type="button" onclick="window.location.href='sgpf.php'">Save</button></td>
                    </tr>
                </table>
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
        <div id="fpage">
            <p>Hacemos Software</p>
        </div>
    </div>
</body>
</html>
