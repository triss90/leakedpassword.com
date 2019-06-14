<?php
$submitted_password = $_POST['password'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.leakedpassword.com/pass/".$submitted_password);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
print_r($output);
