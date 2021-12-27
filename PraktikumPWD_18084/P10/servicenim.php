<?php
$url ="http://localhost/PraktikumPWD_18084/P10/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
    echo "<p>";
    echo "NIM   :".$r->nim."<br/>";
    echo "</p>";
}