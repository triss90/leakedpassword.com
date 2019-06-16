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


            </div>
        </div>
    </div>

</main>
<?php include('../../_inc/footer.php'); ?>
