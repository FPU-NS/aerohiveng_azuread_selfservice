<html>
    
<head>
<title>Wifi Self-Service Portal</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Cutive" rel="stylesheet">
</head>

<body>   
<img src="logo.jpg">
<p>
Welcome 

<?php
    $upn = $_SERVER["HTTP_X_MS_CLIENT_PRINCIPAL_NAME"];
    echo $upn;
?>

   |   <a id="topmenu" href="help.php">help</a>   |   <a id="topmenu" href="/.auth/logout">logout</a>

<p>
Use of this form indicates agreement to the Terms of Service 
<br>outlined in the help section.

<p>
<div class="index" style="float: left;">
<b>Create IoT Credentials</b>
<p><font size="1">
You may provide your mobile number if you would like to receive 
a SMS in addition to an email with your password.
<p></font>
<form action="createiot.php" method="post">
mobile:<br /><input type="tel" name="phone" pattern="^\d{10}$" placeholder="areacode + phone ()" autocomplete="off" >
<p><input type="submit" name="submit" value="create IoT (30 weeks)" />
</form>
<p>
<hr>
<b>Create Guest Pass</b>
<p>
<p>
<form action="createguest.php" method="post">
<p><font size="1">
You may provide the guest's email, mobile, or both for password delivery.
<p>
Only one guest pass may be active at a time, but is useable on 10 devices.
<p>
The guest username will include your email. You give consent to share this
information by using this form. 
<p></font>
email:<br /><input type="email" name="email" placeholder="user@email.com" autocomplete="off" ><br />
mobile<br /><input type="tel" name="phone" pattern="^\d{10}$" placeholder="areacode + phone ()" autocomplete="off" >
<p><input type="submit" name="submit" value="create guest (7 days)" />
</form>
</div>

<div class="index" style="float: left;">
<b>Manage</b>
<p>    
<form action="manageiot.php" method="post">
<p><input type="submit" name="submit" value="IoT management" />
</form>
<p>
<hr>
<p>
<form action="manageguest.php" method="post">
<p><input type="submit" name="submit" value="guest management" />
</form>    
</div>

</body>
</html>