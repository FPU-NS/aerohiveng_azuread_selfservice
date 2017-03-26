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
<div class="index" style="float: left;">
<b>Create Credentials</b>
<p>
<form action="createiot.php" method="post">
mobile: (optional)<br /><input type="tel" name="phone" pattern="^\d{11}$" placeholder="area code + phone (18001234567)" autocomplete="off" >
<p><input type="submit" name="submit" value="create IoT" />
</form>
<p>
<hr>
<p>
<form action="createguest.php" method="post">
<p><input type="submit" name="submit" value="create guest" />
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