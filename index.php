<?php
require_once('inc_functions.php');

//----DECLARE VARIABLES
if(isset($_POST['words'])) {$words      	               = $_POST['words'];}
	else{$words = FALSE;}
if(isset($_POST['tweets'])) {$tweets       	               = $_POST['tweets'];}
	else{$tweets = FALSE;}
if(isset($_POST['paragraphs'])) {$paragraphs         	   = $_POST['paragraphs'];}
	else{$paragraphs = FALSE;}
if(isset($_POST['fullName'])) {$rfullName                     = $_POST['fullName'];}
            else{$fullName = FALSE;}
if(isset($_POST['email'])) {$email                                  = $_POST['email'];}
            else{$email = FALSE;}
if(isset($_POST['message'])) {$message                     = $_POST['message'];}
            else{$message = FALSE;}

//----FLAGS
$wordsFlag      	= FALSE;
$tweetsFlag       	= FALSE;
$paragraphsFlag     = FALSE;
$fullNameFlag       = FALSE;
$emailFlag          = FALSE;
$messageFlag        = FALSE;

//VALIDATION
if(isset($words)) {$wordsFlag = TRUE;}
if(isset($tweets)){$tweetsFlag = TRUE;}
if(isset($paragraphs)){$paragraphsFlag = TRUE;}
$fullNameFlag = validationLength($paragraphs, 2);
if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {$emailFlag = TRUE;}
if(isset($message)){$messageFlag = TRUE;}


if($fullNameFlag     && 
$emailFlag           &&
$messageFlag
) 
//REDIRECT
	{header('Location: index.php'); 
//SEND EMAIL
$to = "edmund.dunn@gmail.com";
$subject = "Contact from Trump-Ipsum";
$emailMessage = "Full Name:$fullName<br>
            Email:$email<br>
            Message:$message";
$header = "From: info@trump-ipsum.org";

mail($to, $subject, $emailMessage, $header);

};

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="https://trump-ipsum.org/index.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Trump Ipsum" />
    <meta property="og:description" content="A Lorem Ipsum generator using Donald Trump's tweets" />
    <meta property="og:image" content="https://trump-ipsum.org/images/trump-ipsum-logo-lg.png" />

    <meta name="author" content="Edmund Dunn">
    <meta name="copyright" content="Copyright Edmund Dunn 2017. All Rights Reserved.">
    <meta name="keywords" content="lorem ipsum trump">
    <meta name="description" content="A random text generator based on Donald Trump's tweets.">

    <title>Trump Ipsum</title>

    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="application/ld+json">
    {
      "@context": "https://trump-ipsum.org",
      "@type": "Website",
      "url": "https://trump-ipsum.org",
      "contactPoint": [{
        "@type": "ContactPoint",
        "email": "edmund.dunn@gmail.com",
        "contactType": "customer service"
      }]
    }
</script>

</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=288128181631230";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <ul class="sr-only" id="pagenav">
        <li><a href="#pagecontent">Page Conent</a></li>
        <li><a href="#pagenavigation">Site Navigation</a></li>
        <li><a href="#pageheader">Page Header</a></li>
        <li><a href="#pagesidebar">Page Sidebar</a></li>
        <li><a href="#pagefooter">Page Footer</a></li>
    </ul>
    <section id="cover">
        <div id="cover-caption">
            <div class="d-flex justify-content-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1 class="display-3">Welcome to the most,  without a doubt, most wonderful website ever! Trust me! The Best!</h1>
                    <h4>A Lorem Ipsum generator using The Donald's tweets.</h4>
                    <br>
                    <a href="#nav-main" class="btn btn-primary" role="button" id="down">Scroll Down for Magnificence!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation -->
    <nav class="navbar navbar-default" id="pagenavigation">
        <div class="container" id="nav-main">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img class="img-responsive" src="images/favicon-32x32.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#ipsum">Trump Ipsum</a></li>
                    <li><a href="#contactus">Contact Me</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- Page Content -->
    <div class="container-fluid" id="maincontainer">
        <a href="#" id="pagecontent"></a>
        <header id="pageheader">
            <h1 id="ipsum">Trump Ipsum</h1>
            <p>Please select the number of words, whole tweets or paragraphs.</p>
        </header>
        <div class="row">
                <div class="col-lg-12">
                    <form action="index.php" id="form1" name="form1" method="post">
                        <fieldset>
                            <legend><h3>Select <span>One</span>:</h3></legend>
                            <?php formTextField('words', 'Number of Words:', 'text', $words); ?>
                            <?php formTextField('tweets', 'Or Number of Tweets:', 'text', $tweets); ?>
                            <?php formTextField('paragraphs', 'Or Number of Paragraphs:', 'text', $paragraphs); ?>
                        </fieldset>
                        <br>
                        <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Give it to me!">
                    </form>
                </div> 
                <div class="col-md-12" id="output">
                    <h3>Here is your text:</h3>
                    <p><?php if(isset($words)){words($words);} ?></p>
                    <p><?php if(isset($tweets)){tweets($tweets);} ?></p>
                    <p><?php if(isset($paragraphs)){paragraphs($paragraphs);} ?></p>
                </div>
            </div>
            <hr>
            <div class="row" id="contactcontainer">
                <div class="col-lg-12" id="contactus">
                    <h3>Let me know what you think:</h3>
                    <form action="index.php" id="form2" name="contact" method="post">
                        <div class="form-group">
                            <?php formTextField('email', 'Email address:', 'email', $email); ?>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <?php formTextField('fullName', 'Full Name:', 'text', $fullName); ?>
                        </div>
                        <div class="form-group">
                            <?php formTextArea('message','Message: ', 3, 30, $message); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Send it!</button>
                    </form>
                </div>
                <hr>
            </div>
            <!-- /.row -->

            <hr>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="container-fluid bg-inverse" id="pagefooter">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center">Copyright &copy; Edmund Dunn 2017</p>
                <div class="social-links">
                    <div class="fb-share-button" data-href="https://trump-ipsum.org" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                        <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftrump-ipsum.org%2F&amp;src=sdkpreparse">Share</a>
                    </div>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                    <script type="IN/Share" data-url="https://trump-ipsum.org" data-counter="right"></script>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>

    <!-- Custom JavaScript -->
    <script src="js/scripts.js"></script>

</body>

</html>



