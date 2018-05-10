<?php
	require_once('class/dbconfig.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
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
            <!-- Register -->
            <div id="midr">
                <br>
                <br>
                <br>
                <br>
                <form action="register.php" method="POST">
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
		                    <td>Confirm Password:</td>
		                </tr>
		                <tr>
		                    <td><input name="cpassword" maxlength="64" style="width:250px;" type="password"></td>
		                </tr>
		                <tr>
		                    <td><br></td>
		                </tr>
		                <tr>
		                    <td><input name="register" type="submit" value="Register"></td>
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
				if(isset($_POST['register']))
				{
					@$email=$_POST['email'];
					@$password=$_POST['password'];
					@$cpassword=$_POST['cpassword'];
				
					if($password==$cpassword)
					{
						$query = "SELECT * FROM User WHERE Email='$email'";
						//echo $query;
					$query_run = mysqli_query($con,$query);
					//echo mysql_num_rows($query_run);
					if($query_run)
						{
							if(mysqli_num_rows($query_run)>0)
							{
								echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
							}
							else
							{
								$query = "INSERT INTO User (Email,Password) VALUES('$email','$password')";
								$query_run = mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript">alert("Registered User")</script>';
								}
								else
								{
									echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
								}
							}
						}
						else
						{
							echo '<script type="text/javascript">alert("DB error")</script>';
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
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
