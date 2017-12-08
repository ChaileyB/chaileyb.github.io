
<?php

if ($_POST['submit']) {
    if (!$_POST['name']) {
        $error="Please enter your name";
    }
    if (!$_POST['email']) {
        $error="Please enter your email address";

    }
    if (!$_POST['message']) {
        $error="Please enter a message";
    }
    if (!$_POST['check']) {
        $error="Please confirm that you are not a robot";
    }

    if ($error) {
        $result="Whoops! We found an error!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico'/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msapplication-config" content="tiles.xml" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>charlie george | Creative and Digital Marketing agency</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap_custom.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/c25421db15.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Muli|Oswald" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <a class="navbar-brand navbar-right" href="#"><img class="brand-image" src="images/website_navbar.svg" alt="charlie george logo"/ </a>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="#">Home</a></li>
                            <li class="dropdown">
                                <a href="charliegeorge_about.html" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="charliegeorge_aboutus.html">About Us</a></li>
                                    <li><a href="charliegeorge_contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="charliegeorge_products.html" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="charliegeorge_websites.html">Websites</a></li>
                                    <li><a href="charliegeorge_logos.html">Logos</a></li>
                                    <li><a href="charliegeorge_marketingconsulting.html">Marketing Consulting</a></li>
                                    <li><a href="charliegeorge_branding.html">Branding</a></li>
                                    <li><a href="charliegeorge_stationery.html">Stationery</a></li>
                                    <li><a href="charliegeorge_colourschemes.html">Colour Schemes</a></li>
                                    <li><a href="charliegeorge_posters.html">Posters</a></li>
                                    <li><a href="charliegeorge_brochures.html">Brochures</a></li>
                                </ul>
                            </li>
                            <li><a href="charliegeorge_portfolio.html">Portfolio</a></li>
                            <li><a href="charliegeorge_process.html">Process</a></li>
                        </ul>
                    </div>
                    </div>
            </div>

            <div class="container">
                <div class="jumbotron">
                    <h1 class="text-center">Welcome to charlie george</h1>
                    <p class="text-center">An innovative creative and digital marketing agency based in Cambridgeshire</p>
                    <h3 class="text-center">This website is a work in progress. Please feel free to <a data-toggle="modal" href="#ContactModal">contact us</a> in the meantime if you have any questions.</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <img class="column-image" src="images/Person_Circle.svg" height=180px/>
                    <h3 class="text-center">Putting your People First</h3>
                    <p>At charlie george, we understand that business at its core is about the ability to deal with people. As such, we will make every effort to accomodate our clients as individuals, whilst striving to help their organisation to the best of our ability.</p>
                    <button class="btn btn-default btn-column text-center" role="button" data-toggle="modal" data-target="#ContactModal">Find out more!</button>
                </div>
                <div class="col-sm-4">
                    <img class="column-image" src="images/Connection_Circle.svg" height=180px/>
                    <h3 class="text-center">Establishing your Online Presence</h3>
                    <p>In today's business world, it is vital for businesses to have a successful online presence. At charlie george, we are more than happy to help you achieve this through helping you create and optimise your website for search engines, driving your business.</p>
                    <button class="btn btn-default btn-column text-center" role="button" data-toggle="modal" data-target="#ContactModal">Find out more!</button>
                </div>
                <div class="col-sm-4">
                    <img class="column-image" src="images/pricing_circle.svg" height=180px/>
                    <h3 class="text-center">Pricing Flexibly</h3>
                    <p>Every business has its own assortment and distribution of costs. We offer flexible pricing, in order to help businesses accomodate us within their budgeting. As such, we offer a variety of products to suit businesses with a wide range of budgets.</p>
                    <button class="btn btn-default btn-column text-center" type="button" role="button" data-toggle="modal" data-target="#ContactModal">Find out more!</button>
                </div>
            </div>

            <div id="ContactModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Contact charlie george</h3>
                        </div>
                        <div class="modal-body">

                            <?php echo $result;?>


                            <!-- Do not change the code! -->
                            <a id="foxyform_embed_link_912660" href="http://www.foxyform.com/">foxyform</a>
                            <script type="text/javascript">
                                (function(d, t){
                                    var g = d.createElement(t),
                                        s = d.getElementsByTagName(t)[0];
                                    g.src = "http://www.foxyform.com/js.php?id=912660&sec_hash=dd8bb540039&width=350px";
                                    s.parentNode.insertBefore(g, s);
                                }(document, "script"));
                            </script>
                            <!-- Do not change the code! -->
                        </div>

                    </div>
                </div>
            </div>

            <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
                <div class="container">
                    <div class="navbar-text pull-left">
                        <p>Copyright &copy; 2017 charlie george<br/>
                            Call now: +44 (0)7591 697659<br/>
                            Email: contact@charliegeorge.co.uk</p>
                    </div>
                    <div class="navbar-text pull-right">
                        <p>Follow us on social media</p>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
                    </div>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/validator.js"></script>
            <script src="js/contact.js"></script>
            </body>
        </html>
