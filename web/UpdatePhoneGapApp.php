<?php
$phonegapUsername = getenv("phonegap_username");
$phonegapPassword = getenv("phonegap_password");
$phonegapAppId = getenv("phonegap_app_id");

$curlCommand = 'curl -u "$phonegapUsername:$phonegapPassword" -X PUT -d \'data={"pull":"true"}\' https://build.phonegap.com/api/v1/apps/$phonegapAppId';

$result = exec($curlCommand);

$array = json_decode($result, true);

$arrayAsString = print_r($array, true);
echo($arrayAsString);

$message = "";
$message .= "The PhoneGap app code has changed. An update has been requested: ";
$message .= "\n";
$message .= "\n";
$message .= $arrayAsString;

//mail("jpruiz114@gmail.com", "VetDir PhoneGap App", $message);
// @todo: Use mail api to send this message.
