<?php 
    include('lgtasks.php');
    include('encdec.php');
?>
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>SportUnleash</title>
    <script type="text/javascript">
    (function(a, m, g, i, k, n, l) {
        a.GoogleAnalyticsObject = k;
        a[k] = a[k] || function() {
            (a[k].q = a[k].q || []).push(arguments)
        }, a[k].l = 1 * new Date();
        n = m.createElement(g), l = m.getElementsByTagName(g)[0];
        n.async = 1;
        n.src = i;
        l.parentNode.insertBefore(n, l)
    })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");
    ga("create", "UA-52305221-5", "auto");
    ga("send", "pageview");
    </script>
    <link href="./static/css/bootstrap.css" rel="stylesheet" media="all">
    <link href="./static/css/site.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="./static/css/ekko-lightbox.css">
    <script type="text/javascript" src="./static/js/jquery.js"></script>
    <link rel="icon" type="image/ico" href="/favicon.png">
</head>

<body id="home">
    <header>
        <div class="topheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 logo">
                        <a href="/" title="Sports Unleash" itemprop="url">
                            <img itemprop="logo" src="static/images/logo.png" alt="Sport Unleash Logo" id="logo">
                        </a>
                    </div>
                    <div class="col-md-7 mega-title">Have your child SportUnleash tested today!</div>
                </div>
            </div>
        </div>
        <div class="centerheader">
            <div class="bottomheader">
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 left-pane">The Sports Talent Identifying System</div>
                                <div class="col-md-5 right-pane">"Unlocking your child's sport gifting today"</div>
                            </div>
                            <div class="col-md-12 text-center center-pane">for 9 - 11 year olds</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="wrapper">
        <div id="site-container">
            <div id="content-container" class="col-md-12 content-container">
                <div class="login-scrn">
                    <div class="row">
                        <div class="col-md-6 login-pnl">
                            <form action="" method="post">
                            <h2>Sign In</h2>
                            <div class="form-group"><input class="form-control" id="username" name="username" placeholder="User Name" type="text"></div>
                            <div class="form-group"><input class="form-control" id="passwd" name="passwd" placeholder="Password" type="password"></div>
                            <button name="submit" type="submit" class="btn btn-primary">Sign In</button><br>                            
                            <span class="login-error"><?php echo $error; ?></span>
                        </form>
                        </div>
                        <div class="col-md-5 signup-pnl">
                            <h3 class="error">Not registered yet?</h3>
                            <p>Please take this path to <a href="#">Sign Up</a></p>
                            <p><?php 
                                $plain_txt = "123456";
                                echo "Plain Text = $plain_txt\n";

                                $encrypted_txt = encrypt_decrypt('enc', $plain_txt);
                                echo "Encrypted Text = $encrypted_txt\n";

                                $decrypted_txt = encrypt_decrypt('dec', $encrypted_txt);
                                echo "Decrypted Text = $decrypted_txt\n";                              
                            ?></p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <footer></footer>
    <script src="./static/js/site.js"></script>
    <script src="./static/js/bootstrap.js"></script>
    <script src="./static/js/ekko-lightbox-min.js"></script>
    <script>
    $("#enqForm").validate();
    </script>
</body>

</html>
