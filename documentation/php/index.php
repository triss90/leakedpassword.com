<?php include('../../_inc/header.php'); ?>
<body class="documentation" id="php">
<?php include('../../_inc/navigation.php'); ?>

<main class="content">

    <?php include('../../_inc/sidebar.php'); ?>

    <div class="documentation-content">
        <div class="row">
            <div class="col-100">
                <h1>PHP Implementation</h1>

                <h3>Request</h3>
                <pre data-code="php" class="php">&#60;?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://api.leakedpassword.com/pass/{your-password}");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    curl_close($curl);
    print_r($response);
?></pre>

                <h3>Response</h3>
                <pre data-code="json">{
    "password": {
        "leak": true,
        "hash": "7110eda4d09e062aa5e4a390b0a572ac0d2c0220",
        "seen": 1256907
    }
}</pre>
            </div>
        </div>
    </div>

</main>
<?php include('../../_inc/footer.php'); ?>
