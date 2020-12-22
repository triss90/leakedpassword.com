<?php include('../../_inc/header.php'); ?>
<body class="documentation" id="shell">
<?php include('../../_inc/navigation.php'); ?>

<main class="content">

    <?php include('../../_inc/sidebar.php'); ?>

    <div class="documentation-content">
        <div class="row">
            <div class="col-100">
                <h1>Shell Implementation</h1>

                <h3>Password Request</h3>
                <pre data-code="shell" class="shell">curl --location --request GET https://leakedpassword.com/api/?p={your-password}</pre>

                <h3>SHA1 Hash Request</h3>
                <pre data-code="shell" class="shell">curl --location --request GET https://leakedpassword.com/api/?s={your-sha1-hash}</pre>

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
    <?php include('../../_inc/credits.php'); ?>
</main>
<?php include('../../_inc/footer.php'); ?>
