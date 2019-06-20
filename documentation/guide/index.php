<?php include('../../_inc/header.php'); ?>
<body class="documentation" id="guide">
<?php include('../../_inc/navigation.php'); ?>

<main class="content">

    <?php include('../../_inc/sidebar.php'); ?>

    <div class="documentation-content">
        <div class="row">
            <div class="col-100">
                <h1>Using the API</h1>
                <p>There are two basic ways of querying the API. You can send us the unecrypted password and let us sha1 hash it before retrieving the data:</p>
                <code style="color: #e31d65">https://api.leakedpassword.com/pass/{your-clear-text-password}</code>
                <p>Or you can hash the password before sending it to us. In theory this method should be faster, and obviously more secure:</p>
                <code style="color: #25a954">https://api.leakedpassword.com/sha1/{your-sha1-hashed-password}</code>
                <h2>The response</h2>
                <p>The typical successful response should look something like this:</p>
                <pre data-code="json">{
    "password": {
        "leak": true,
        "hash": "7110eda4d09e062aa5e4a390b0a572ac0d2c0220",
        "seen": 1256907
    }
}</pre>
                <h3>SHA1 format</h3>
                <p>If you chose to query the API for a sha1 hash, this must be rendered as a hexadecimal number, 40 digits long (Example: <code>7110eda4d09e062aa5e4a390b0a572ac0d2c0220</code>). Otherwise the API will return an error:</p>
                <pre data-code="json" class="json">{
    "error": "The hash was not in a valid SHA1 format"
}</pre>


                <h3>HTTPS</h3>
                <p>The API cannot be invoked over an unencrypted HTTP connection. The API will return the following error if called from a non-HTTPS connection:</p>
                <pre data-code="json" class="json">{
    "error": "Query from non-secure connection"
}</pre>

                <p>Other unsuccessful queries will return:</p>
                <pre data-code="json" class="json">{
    "error": "Invalid API query"
}</pre>
            </div>
        </div>
    </div>
    <?php include('../../_inc/credits.php'); ?>
</main>
<?php include('../../_inc/footer.php'); ?>
