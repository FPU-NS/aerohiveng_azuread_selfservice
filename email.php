<html>
<head>
<title>Email</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cutive">  
</head>

<body>
<img src="logo.jpg">
<p> 

<?php
include 'tokens.php';  
$userName = $_POST["userName"];
$id = $_POST["id"];
$email = $_POST["email"];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://cloud-va.aerohive.com/xapi/v1/identity/credentials/deliver?ownerId=$ownerId",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n  \"credentialId\": $id,\r\n  \"deliverMethod\": \"EMAIL\",\r\n  \"email\": \"$email\"\r\n}",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer $guesttoken",
    "cache-control: no-cache",
    "content-type: application/json",
    "x-ah-api-client-id: $clientid",
    "x-ah-api-client-redirect-uri: $redirecturi",
    "x-ah-api-client-secret: $clientsecret"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
}
?>

<p>
Your wifi credentials have been emailed to 
<?php
echo $email;
?> 
<p>
<a id="returnbutton" href="<?php echo $returnurl ?>">Return</a>

</body>
</html>