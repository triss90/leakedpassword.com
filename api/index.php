<?php
/*  API usage
    https://api.leakedpassword.com/pass/{your-password}
    https://api.leakedpassword.com/sha1/{your-sha1-hash}
*/
header("Access-Control-Allow-Origin: *");

// Search for partial string in array
function array_search_partial($arr, $keyword) {
    foreach($arr as $index => $string) {
        if (strpos($string, $keyword) !== FALSE)
            return $index;
    }
}

// Check if string is sha1
function is_sha1($str) {
    return (bool) preg_match('/^[0-9a-f]{40}$/i', $str);
}

// Get password and sha1 determine if hashed
$sha1 = $_GET['sha1'];
$submitted_password = $_GET['password'];
$hash = isset($sha1) && $sha1 == 1 ? $submitted_password : sha1($submitted_password);

// Check if submitted password is valid hash
if (is_sha1($hash) != true) {
    $data_array = array(
        "error" => "The hash was not in a valid SHA1 format"
    );
}

// Check submitted password is empty or not set
else if (!isset($submitted_password) || $submitted_password == "") {
    $data_array = array(
        "error" => "Invalid API query"
    );
}

// Check if password was leaked and build response
else {
    // Split hash into prefix and suffix
    $hash_prefix = strtoupper(substr($hash, 0, 5));
    $hash_suffix = strtoupper(substr($hash, 5, 35));
    // Get data from have-i-been-pwned
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.pwnedpasswords.com/range/" . $hash_prefix);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    if ($output == false) {
        $data_array = array(
            "error" => "Query from non-secure connection"
        );
    } else {
        // Check if password has been leaked and prepare response
        $password = array_map("trim", explode(PHP_EOL, $output));
        $match = array_search_partial($password, $hash_suffix);
        $leak = $match != "" ? true : false;
        $leaked_password_hash = explode(':', $password[$match]);
        // Build data array
        $data_array = array(
            "password" => array(
                "leak" => (bool)$leak,
                "hash" => (string)$hash,
                "seen" => (int)$leaked_password_hash[1]
            )
        );
    }
}

// Encode json array and print data
$data_json = json_encode($data_array);
print_r($data_json);