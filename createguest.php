<html>
<head>
<title>Create</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Cutive" rel="stylesheet">
</head>

<body>
<img src="logo.jpg">
<p>
guest credential
<p>
<?php
include 'tokens.php';  
curl_setopt($process, CURLOPT_SSL_VERIFYPEER, true);
$policy = "GUEST";
$userName = $_SERVER["HTTP_X_MS_CLIENT_PRINCIPAL_NAME"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://cloud-va.aerohive.com/xapi/v1/identity/credentials?ownerId=$ownerId",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n  \"deliverMethod\": \"EMAIL\",\r\n  \"policy\": \"$policy\",\r\n  \"email\": \"$userName\",\r\n  \"firstName\": \"$firstName\",\r\n  \"groupId\": \"$groupIdguest\",\r\n  \"lastName\": \"$lastName\",\r\n \"userName\": \"g.$userName\"\r\n}",
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
$json = json_decode($response);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else { 
    echo "SSID: " .$json->data->ssid[0];
    echo " Password: " .$json->data->password; 
}
?>
<p>
<a id="returnbutton" href="<?php echo $returnurl ?>">Return</a>

</body>
</html>