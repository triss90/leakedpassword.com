<?php include('_inc/header.php'); ?>
<body id="home">
<?php include('_inc/navigation.php'); ?>

<main class="content" id="front">
    <div class="content-inner">
        <div class="row">
            <div class="col-100 center">
                <h1>Has your password been leaked?</h1>
                <p>Password hacking compromised more than 150 million accounts this past year.<br>
                Find out if a password hack has exposed your password to the world.</p>
            </div>
        </div>
        <form action="check_password.php" method="post" class="check-password" id="check-password">
            <div class="row">
                <div class="col-75">
                    <input type="password" name="password" id="password" placeholder="Enter a password" value="" required>
                </div>
                <div class="col-25">
                    <button id="buttonSubmit" type="submit" class="btn btn-block">Test password</button>
                    <button id="buttonLoad" class="btn btn-block" type="button" style="display: none;" disabled>
                        <div class="loader-fancy loader-fancy-small">
                            <svg class="circular" viewBox="25 25 50 50">
                                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-100 center" id="output"></div>
        </div>
        <div class="row">
            <div class="col-100 center">
                <br<br><br>
                <p style="color: #a6b0c3; font-size: 0.8rem;">Developer? Implement the <a href="/documentation">API</a> in your user sign-up process, <br>to add an extra layer of validation and security.</p>
            </div>
        </div>
    </div>
</main>

<footer class="home">
    <p>Designed, built, and maintained by <a href="https://triss.dev" target="_blank">Tristan White</a>.</p>
    <p>Powered by <a href="haveibeenpwned.com" target="_blank">Have I Been Pwned</a>.</p>
</footer>

<?php include('_inc/footer.php'); ?>

<script>
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    $(function () {
        $('form').on('submit', function (e) {
            e.preventDefault();
            $('#buttonSubmit').hide();
            $('#buttonLoad').show();
            setTimeout(function(){
                $.ajax({
                    type: 'post',
                    url: 'check_password.php',
                    data: $('#check-password').serialize(),
                    success: function(response) {
                        $('#buttonLoad').hide();
                        $('#buttonSubmit').show();
                        var obj = JSON.parse(response);
                        console.log(obj['password']['leak']);
                        if (obj['password']['leak'] == true) {
                            $('#output').html(
                                "<h2 style='color:#e31d65;'>Password has been leaked!</h2>" +
                                "<h3>This password has been seen <code style='color: #e31d65;'>"+numberWithCommas(obj['password']['seen'])+"</code> times before.</h3>" +
                                "<p>This password has previously appeared in a data breach and should never be used. If you've ever used it anywhere before, change it!</p>"
                            );
                        } else {
                            $('#output').html(
                                "<h2 style='color:#25a954;'>Good news!</h2>" +
                                "<p>This password wasn't found among any of the leaked passwords. That doesn't necessarily mean it's a good password, merely that it's not indexed. If you're not already using a password manager, you should probably consider doing that.</p>"
                            );
                        }
                    }
                });
            }, 1500);
        });
    });
</script>