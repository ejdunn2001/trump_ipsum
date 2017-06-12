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
$paragraphsFlag         = FALSE;
$fullNameFlag             = FALSE;
$emailFlag                  = FALSE;
$messageFlag           = FALSE;

//VALIDATION
if(isset($words)) {$wordsFlag = TRUE;}
if(isset($tweets)){$tweetsFlag = TRUE;}
if(isset($paragraphs)){$paragraphsFlag = TRUE;}
$fullNameFlag = validationLength($paragraphs, 2);
if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {$emailFlag = TRUE;}
if(isset($message)){$messageFlag = TRUE;}


if($fullNameFlag     && 
$emailFlag              &&
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
                    <a href="#nav-main" class="btn btn-lg glyphicon glyphicon-chevron-down" role="button" id="down"></a>
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
        <h2>trump-ipsum.org Terms of Service and Privacy Policy</h2>

<h3>1. Terms</h3>

  <p>By accessing the website at <a href="https://trump-ipsum.org">https://trump-ipsum.org</a>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>

<h3>2. Use License</h3>

  <ol type="a">
    <li>
      Permission is granted to temporarily download one copy of the materials (information or software) on trump-ipsum.org's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:

      <ol type="i">
        <li>modify or copy the materials;</li>
        <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
        <li>attempt to decompile or reverse engineer any software contained on trump-ipsum.org's website;</li>
        <li>remove any copyright or other proprietary notations from the materials; or</li>
        <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
      </ol>
    </li>
    <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by trump-ipsum.org at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
  </ol>

<h3>3. Disclaimer</h3>

  <ol type="a">
    <li>The materials on trump-ipsum.org's website are provided on an 'as is' basis. trump-ipsum.org makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
    <li>Further, trump-ipsum.org does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
  </ol>

<h3>4. Limitations</h3>

  <p>In no event shall trump-ipsum.org or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on trump-ipsum.org's website, even if trump-ipsum.org or a trump-ipsum.org authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>

<h3>5. Accuracy of materials</h3>

  <p>The materials appearing on trump-ipsum.org's website could include technical, typographical, or photographic errors. trump-ipsum.org does not warrant that any of the materials on its website are accurate, complete or current. trump-ipsum.org may make changes to the materials contained on its website at any time without notice. However trump-ipsum.org does not make any commitment to update the materials.</p>

<h3>6. Links</h3>

  <p>trump-ipsum.org has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by trump-ipsum.org of the site. Use of any such linked website is at the user's own risk.</p>

<h3>7. Modifications</h3>

  <p>trump-ipsum.org may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>

<h3>8. Governing Law</h3>

  <p>These terms and conditions are governed by and construed in accordance with the laws of Maryland and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>

<h2>Privacy Policy</h2>

  <p>Your privacy is important to us.</p>

  <p>It is trump-ipsum.org's policy to respect your privacy regarding any information we may collect while operating our website. Accordingly, we have developed this privacy policy in order for you to understand how we collect, use, communicate, disclose and otherwise make use of personal information. We have outlined our privacy policy below.</p>

  <ul>
    <li>We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.</li>
    <li>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</li>
    <li>We will collect and use personal information solely for fulfilling those purposes specified by us and for other ancillary purposes, unless we obtain the consent of the individual concerned or as required by law.</li>
    <li>Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.</li>
    <li>We will protect personal information by using reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.</li>
    <li>We will make readily available to customers information about our policies and practices relating to the management of personal information.</li>
    </ul>
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



