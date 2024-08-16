<?php
$msisdn = $_GET['msisdn'];
$api = "https://app.mynagad.com:20002/api/user/check-user-status-for-log-in?msisdn=" . $msisdn;

$headers = array(
    "X-KM-User-AspId: 100012345612345",
    "X-KM-User-Agent: ANDROID/1152",
    "X-KM-DEVICE-FGP: 19DC58E052A91F5B2EB59399AABB2B898CA68CFE780878C0DB69EAAB0553C3C6",
    "X-KM-Accept-language: bn",
    "X-KM-AppCode: 01"
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
