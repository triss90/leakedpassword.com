<?php include('../../_inc/header.php'); ?>
<body class="documentation" id="c">
<?php include('../../_inc/navigation.php'); ?>

<main class="content">

    <?php include('../../_inc/sidebar.php'); ?>

    <div class="documentation-content">
        <div class="row">
            <div class="col-100">
                <h1>C# Implementation</h1>

                <h3>Password Request</h3>
                <pre data-code="c#" class="c">var client = new RestClient("https://leakedpassword.com/api/?p={your-password}");
var request = new RestRequest(Method.GET);
request.AddHeader("Content-Type", "application/json");
request.AddHeader("Accept", "application/json");
request.AddParameter("application/json", "{}", ParameterType.RequestBody);
IRestResponse response = client.Execute(request);</pre>

                <h3>SHA1 Hash Request</h3>
                <pre data-code="c#" class="c">var client = new RestClient("https://leakedpassword.com/api/?s={your-sha1-hash}");
var request = new RestRequest(Method.GET);
request.AddHeader("Content-Type", "application/json");
request.AddHeader("Accept", "application/json");
request.AddParameter("application/json", "{}", ParameterType.RequestBody);
IRestResponse response = client.Execute(request);</pre>

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
