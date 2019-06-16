<?php include('../../_inc/header.php'); ?>
<body class="documentation" id="javascript">
<?php include('../../_inc/navigation.php'); ?>

<main class="content">

    <?php include('../../_inc/sidebar.php'); ?>

    <div class="documentation-content">
        <div class="row">
            <div class="col-100">
                <h1>Javascript Implementation</h1>

                <h3>Request</h3>
                <pre data-code="javascript">function reqListener () {
    console.log(this.responseText);
}

var oReq = new XMLHttpRequest();
oReq.addEventListener("load", reqListener);
oReq.open("GET", "https://api.leakedpassword.com/pass/{your-password}");
oReq.send();</pre>

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
