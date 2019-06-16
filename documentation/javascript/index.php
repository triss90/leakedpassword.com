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
                <pre data-code="javascript">function loadJSON(callback) {
    var xobj = new XMLHttpRequest();
    xobj.overrideMimeType("application/json");
    xobj.open('GET', 'https://api.leakedpassword.com/pass/1234', true);
    xobj.onreadystatechange = function () {
        if (xobj.readyState == 4 && xobj.status == "200") {
          callback(xobj.responseText);
       }
    };
    xobj.send(null);
}
function init() {
    loadJSON(function(response) {
       var actual_JSON = JSON.parse(response);
       console.log(actual_JSON);
    });
}
init();</pre>

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
