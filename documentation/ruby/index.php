<?php include('../../_inc/header.php'); ?>
<body class="documentation" id="ruby">
<?php include('../../_inc/navigation.php'); ?>

<main class="content">

    <?php include('../../_inc/sidebar.php'); ?>

    <div class="documentation-content">
        <div class="row">
            <div class="col-100">
                <h1>Ruby Implementation</h1>

                <h3>Password Request</h3>
                <pre data-code="ruby" class="ruby">require 'net/http'
require 'json'

url = 'https://api.leakedpassword.com/pass/{your-password}'
uri = URI(url)
response = Net::HTTP.get(uri)
JSON.parse(response)</pre>

                <h3>SHA1 Hash Request</h3>
                <pre data-code="ruby" class="ruby">require 'net/http'
require 'json'

url = 'https://api.leakedpassword.com/sha1/{your-sha1-hash}'
uri = URI(url)
response = Net::HTTP.get(uri)
JSON.parse(response)</pre>

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
