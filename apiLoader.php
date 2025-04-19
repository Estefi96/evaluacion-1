<?php
function callApi($url) {
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer ciisa",
            "Content-Type: application/json"
        ]
    ]);

    $response = curl_exec($curl);
    $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if ($httpStatus === 200 && $response !== false) {
        return json_decode($response, true);
    } else {
        return null;
    }
}

$endpoint1 = "https://ciisa.coningenio.cl/v1/services/";
$response1 = callApi($endpoint1);

$endpoint2 = "https://ciisa.coningenio.cl/v1/about-us/";
$response2 = callApi($endpoint2);