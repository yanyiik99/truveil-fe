
<?php
function baseapi($url, $postData = NULL)
{
    // $token = "TmbCDtA38RqDYSrtmqN4nh6uYQ5hNefBMD5cETF7F7g7RuJBww";
    // $token = $getToken;

    $ch     = curl_init($url);
    $headers    = array(
        // 'Authorization: Bearer ' . $token,
        'Content-Type: application/json'
    );

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    $result = json_decode(curl_exec($ch));
    curl_close($ch);
    return $result;
}