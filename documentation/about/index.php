<?php include('../../_inc/header.php'); ?>
<body class="documentation" id="about">
<?php include('../../_inc/navigation.php'); ?>

<main class="content">

    <?php include('../../_inc/sidebar.php'); ?>

    <div class="documentation-content">
        <div class="row">
            <div class="col-100">
                <h1>About the API</h1>
                <p>The data is brought to you by <a href="https://www.troyhunt.com" target="_blank">‎Troy Hunt</a> over at <a href="haveibeenpwned.com" target="_blank">Have I Been Pwned</a>.</p>
                <p>The API has been specifically designed to be easy to use! It requires no authentication, secret keys or anything else that would get in the way.</p>
                <p>A sample usecase for the API, is testing, during the signup process, whether a user's password has previously been leaked, and take appropriate actions based on the result of the API query.</p>
                <p>A sample test might look something like this:</p>
                <pre data-code="javascript" class="javascript">$.getJSON("https://api.leakedpassword.com/pass/1234", function(data) {
    if (data['password']['leak'] == true) {
        // Alert the user to leaked password
    } else {
        // Continue signup process
    }
});</pre>

                <h2>Gudielines</h2>
                <p>Since the API draws on data from <a href="haveibeenpwned.com" target="_blank">Have I Been Pwned</a>, the acceptable use guidelines <strong>must</strong> be adhered to.
                    Among the the things not allow are:</p>
                <ul>
                    <li>Querying the data for purposes that are intended to cause harm to the victims of data breaches</li>
                    <li>Prolonged and aggressive querying of the service such that it impacts availability <em>or</em> costs</li>
                    <li>Anything deliberately intended to limit service availability such as denial of service attacks</li>
                    <li>Deliberate attempts to circumvent the rate limit or abuse other measures design to ensure acceptable use</li>
                    <li>Not <a href="#UserAgent">properly identifying the user agent</a> such that it accurately describes the consumer of the API</li>
                    <li>Misrepresenting the consuming client by impersonating other user agents in an attempt to obfuscate API requests</li>
                    <li>Other services designed to fraudulently represent the Have I Been Pwned name or brand</li>
                    <li>Misrepresenting the source of the data as originating from somewhere other than Have I Been Pwned</li>
                    <li>Not adhering to the Creative Commons Attribution License <a href="#AcceptableUse">as described below</a></li>
                    <li>Automating the consumption of other APIs not explicitly documented on this page</li>
                    <li>Using the service in a fashion that brings Have I Been Pwned into disrepute</li>
                </ul>
                
                <p>You can read more about the use here: <a href="https://haveibeenpwned.com/API/v2#AcceptableUse">Acceptable use by Have I Been Pwned</a>.</p>


            </div>
        </div>
    </div>

</main>
<?php include('../../_inc/footer.php'); ?>
