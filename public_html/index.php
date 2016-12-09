<!DOCTYPE html>
<html lang="en">

<head>

    <!--=============================================== WEBPAGE METADATA ========================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Personal Website">
    <meta name="author" content="Alex Madrzyk">
    <title>Alex Madrzyk</title>

    <!--=============================================== CSS FILES ===============================================-->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>

    <!-- Custom Page Element Styles -->
    <link rel="stylesheet" type="text/css" href="page_elements/css/hover_button.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
    <!--=============================================== NAVBAR ==================================================-->

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">HOME</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#firstPane">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#secondPane">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#thirdPane">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!--=============================================== BODY ====================================================-->

    <!-- Header Title -->
    <div class="bgimg-1">
        <div class="caption" id="title">
            <span class="border" id="headerTitle"> Alex Madrzyk </span>
        </div>
    </div>

    <!-- First Info Pane -->
    <div id="firstPane" style="color: #777; background-color:white; padding:50px 80px; text-align: justify;">

        <!-- Title -->
        <h3 style="text-align:center;">About Me</h3>
        <!-- Content -->
        <div class="row">
            <div class="col-lg-4">
                <p style="font-style: italic; text-align: center">Profile</p>
                <p style="text-align: left; line-height: 135%">
                    I am a Computer Science student at Western University, focusing on programming and design with
                    experience in electronics, development, graphic design and customer relations.
                    Also, learning new things is my passion! <br><br>

                    When I’m not in class, you can find me going on adventures with friends or in my workspace,
                    working on a new project.
                </p>

            </div>
            <div class="col-lg-4">
                <p class="profilePic">
                    <img src="./assets/img/me.png" alt="Alex Madrzyk" height="220px" width="220px"></img>
                </p>
            </div>
            <div class="col-lg-4">
                <p style="font-style: italic; text-align: center">Fun Facts</p>
                <p style="text-align: left;">
                    <ul style="line-height: 135%">
                        <li>I’ve traveled around North America and Europe, and I hope to never stop exploring</li>
                        <li>I am obsessed with Shiba Inu dogs</li>
                        <li>I speak three languages fluently, I am trying to learn a fourth</li>
                        <li>I love being involved in the community and volunteering</li>
                        <li>I usually program in HTML/CSS, Java or C, but I am commited to expanding my knowledge
                            with new languages and frameworks</li>
                    </ul>
                </p>
            </div>
         </div>

        <p style="text-align: center; padding-top: 5%">Want to work together? I would love to hear from you!</p>

        <!-- Contact Button -->
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <?php
                include_once "page_elements/hover_button.html";
                ?>
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>

    <!-- Second Background Image -->
    <div class="bgimg-2">
        <div class="caption">
            <span class="border">LESS HEIGHT</span>
        </div>
    </div>

    <!-- Second Info Pane -->
    <div id="secondPane" style="position:relative;">
        <div style="color:#777; background-color:white; padding:50px 80px; text-align: justify;">
            <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
        </div>
    </div>

    <!-- Third Background Image -->
    <div class="bgimg-3">
        <div class="caption">
            <span class="border">SCROLL UP</span>
        </div>
    </div>

    <!-- Third Info Pane -->
    <div id="thirdPane" style="position:relative;">
        <div style="color:#777; background-color:white; padding:50px 80px; text-align: justify;">
            <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
        </div>
    </div>

    <footer id="footer">
        <h3>Some Footer Text</h3>
    </footer>

    <!--=============================================== JS SCRIPTS ==============================================-->
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>

    <!-- Contact Form JavaScript -->
    <!-- <script src="js/jqBootstrapValidation.js"></script>-->
    <!-- <script src="js/contact_me.js"></script>-->

    <!-- Theme JavaScript -->
    <script src="assets/js/main.js"></script>
</body>

</html>