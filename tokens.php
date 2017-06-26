<?php
# created after initial successful OAUTH connection using a guest management role user created in Hivemanager NG
# every 90 days this api token will need to be refreshed with the corresponding refresh token
# otherwise, initial OAUTH setup will need to be completed again
$accesstoken = "";
# client id obtained from Aerohive Developer portal
$clientid = "";
# client secret obtained from Aerohive Developer portal
$clientsecret = "";
# redirect url set in the Aerohive Developer portal
$redirecturi = "";
# VHM ID from Hivermanager NG about
$ownerId = "";
#URL for return button
$returnurl = "";
#group id matches the user group where the user's PPSK will be created
$groupId = "";
#group id matches the user group where the guest's PPSK will be created
$groupIdguest = "";
#policy variable for create.php
$policy = "GUEST";
?>