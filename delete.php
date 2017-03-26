<html>
<head>
<title>Delete</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Cutive" rel="stylesheet"> 
</head>

<body>
<img src="logo.jpg">
<p> 

<?php
include 'tokens.php';  
$userName = $_POST["userName"];  
$id = $_POST["id"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://cloud-va.aerohive.com/xapi/v1/identity/credentials?ownerId=$ownerId&ids=$id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "DELETE",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer $guesttoken",
    "cache-control: no-cache",
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
<?php
echo $userName;
?>
 has been deleted
<p>
<a id="returnbutton" href="<?php echo $returnurl ?>">Return</a>

</body>
</html>