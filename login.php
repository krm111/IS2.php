<?php
	session_start();
	require_once('class/dbconfig.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div id="principal">
        <!-- Header -->
        <div id="ipage">
            <p style="font-size: 30px">SGPF</p>
        </div>
        <div class="clearipage"></div>
        <div id="mid">
            <!-- Logo -->
            <div id ="midl">
                <br>
                <br>
                <center>
                <img src="img/image.png" alt="logo" height="330" width="330">
                </center>
            </div>
            <!-- Login -->
            <div id="midr">
                <br>
                <br>
                <br>
                <br>
                <form name="user" action="login.php" method="POST">
		            <table style="margin-left: 220px">
		                <tr>
		                    <td>Email:</td>
		                </tr>
		                <tr>
		                    <td><input name="email" maxlength="64" style="width:250px;" type="text"></td>
		                </tr>
		                <tr>
		                    <td>Password:</td>
		                </tr>
		                <tr>
		                    <td><input name="password" maxlength="64" style="width:250px;" type="password"></td>
		                </tr>
		                <tr>
		                    <td>Forgot Password?</td>
		                </tr>
		                <tr>
		                    <td><br></td>
		                </tr>
		                <tr>
		                    <td><input type="checkbox">
		                        <label style="font-size: 15px">Remember me</label></td>
		                </tr>
		                <tr>
		                    <td><br></td>
		                </tr>
		                <tr>
		                    <td><input name="login" type="submit" value="Login"></td>
		                </tr>
		                <tr>
		                    <td><br></td>
		                </tr>
		                <tr>
		                    <td style="text-align: center"><button type="button" onclick="window.location.href='index.php'">Back</button></td>
		                </tr>
		            </table>
                </form>
                <?php
				if(isset($_POST['login']))
				{
					@$email=$_POST['email'];
					@$password=$_POST['password'];
					$query = "SELECT * FROM User WHERE Email='$email' AND Password='$password' ";
					//echo $query;
					$query_run = mysqli_query($con,$query);
					//echo mysql_num_rows($query_run);
					if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
						$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
						$_SESSION['id_user'] = $row["ID_User"];//Obtener el ID_User
						$_SESSION['email'] = $email;
						$_SESSION['password'] = $password;
					
						header( "Location: sgpf.php");
						}
						else
						{
							echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("Database Error")</script>';
					}
				}
				else
				{
				}
			?>
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
