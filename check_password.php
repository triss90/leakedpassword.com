<?php
$submitted_password = $_POST['password'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://leakedpassword.com/api/?p=".$submitted_password);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curl);
curl_close($curl);
print_r($output);