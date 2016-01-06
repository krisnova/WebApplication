<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Soundeavor - Coming Soon</title>

    <!--Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('splash/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('splash/css/splash-main.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="{{ URL::asset('splash/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <!--<i class="fa fa-play-circle"></i> -->  <img src="{{ URL::asset('splash/img/soundeavor.png') }}" width="50" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#wait">Wait List</a>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Soundeavor</h1>
                        <p class="intro-text">Unlocking musical potential through analytics, collaboration and competition.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <img src="{{ URL::asset('splash/img/soundeavor-logo-white.png') }}" /><br />
                <!-- <h2>About Soundeavor</h2> -->
                <p>Our technologies will fundamentally alter the way people come together to create music.</p>
                <p>We deconstruct musicians' playing styles and map their sound to an ecosystem of contests and projects that demand their unique talent. There is an ear for every sound, and our platform will supply the technological bridges for fulfilling that truth. </p>
                <p>Our invitation-only service will launch in early 2016.</p>
            </div>
        </div>
    </section>

    <!-- Wait List Section
    <section id="wait" class="content-section text-center">
        <div class="wait-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Interested in Joining Soundeavor?</h2>
                    <p>Put your name on our waitlist!
                    We will send you a reminder email just as soon as we're up and running.</p>
                    <input type="text" class="btn btn-default btn-lg"><a href="http://soundeavor.com/wait/" class="btn btn-default btn-lg">Enter</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact The Soundeavor Team</h2>
                <p>Interested in getting involved? We would love to hear from you. Please use the links below to email the Soundeavor teammate closest to you.</p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="mailto:sanfrancisco@soundeavor.com" class="btn btn-default btn-lg"> <span class="network-name">San Francisco</span></a>
                    </li>
                    <li>
                        <a href="mailto:denver@soundeavor.com" class="btn btn-default btn-lg"> <span class="network-name">Denver</span></a>
                    </li>
                    <li>
                        <a href="mailto:delta@soundeavor.com" class="btn btn-default btn-lg"> <span class="network-name">Mississippi Delta</span></a>
                    </li>
                    <li>
                        <a href="mailto:baltimore@soundeavor.com" class="btn btn-default btn-lg"> <span class="network-name">Baltimore</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"><img src="{{ URL::asset('splash/img/soundeavor_map.png') }}" /></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Soundeavor 2015</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ URL::asset('splash/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('splash/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset('splash/js/jquery.easing.min.js') }}"></script>

    <!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('splash/js/grayscale.js') }}"></script>

</body>

</html>
