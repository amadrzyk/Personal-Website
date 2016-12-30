<!DOCTYPE html>
<html lang="en">

<head>
    <!--=============================================== WEBPAGE METADATA ========================================-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="My Personal Website">
    <meta name="author" content="Alex Madrzyk">
    <meta name="theme-color" content="#ffffff">

    <meta property='og:title' content='Alex Madrzyk'/>
    <meta property='og:image' content='//www.alexmadrzyk.me/assets/images/screenshot.jpg'/>
    <meta property='og:description' content='Programming and design enthusiast, coffee fanatic and traveler.'/>
    <meta property='og:url' content='//www.alexmadrzyk.me'/>

    <title>Alex Madrzyk</title>

    <!--=============================================== FAVICONS ================================================-->

    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" href="./favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="./manifest.json">
    <link rel="mask-icon" href="./safari-pinned-tab.svg">

    <!--=============================================== CSS FILES ===============================================-->

    <!-- Normalize (https://github.com/necolas/normalize.css) -->
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lato:100,200,300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,800,300" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

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
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#firstPane">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#secondPane">Academics</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#thirdPane">Work</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!--=============================================== BODY ====================================================-->

    <!-- HEADER TITLE -->
    <div class="bgimg-1">
<!--        <div class="caption" id="title" style="display: table;">-->
<!--            <div style="display: table-cell; vertical-align: middle;">-->
<!--                <div>-->
<!--                    <span class="border" id="headerTitle"> Alex Madrzyk </span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
<!--    <div class="headerText"></div>-->

    <!-- FIRST INFO PANE -->
    <div id="firstPane" style="background-color:white; padding:50px 80px; text-align: justify;">

        <!-- Title -->
        <h3 style="text-align:center;">About Me</h3>
        <!-- Content -->
        <div class="row">
            <div class="col-lg-4">
                <p style="font-style: italic; text-align: center; font-weight: 100">Profile</p>
                <p style="text-align: left; line-height: 135%">
                    Hi, I'm Alex! I am a third-year computer science student at Western University. My passions lie in
                    web and software development, design, and customer relations. In my years as a student and
                    young professional, I have delivered creative and engaging solutions across digital media and
                    online presence and assumed leadership roles along the way.<br><br>

                    When I’m not in class, you can find me going on adventures with friends, or at my desk
                    working on a new project.
                </p>

            </div>
            <div class="col-lg-4">
                <p class="profilePic">
                    <img src="assets/images/me.png" alt="Alex Madrzyk" height="220" width="220"/>
                </p>
            </div>
            <div class="col-lg-4">
                <p style="font-style: italic; text-align: center; font-weight: 100">Fun Facts</p>
                <ul style="line-height: 135%; text-align: left;">
                    <li>I’ve traveled around North America and Europe, and I hope to never stop exploring the world</li>
                    <li>I am obsessed with Shiba Inu dogs</li>
                    <li>I speak three languages fluently, and I am trying to learn a fourth</li>
                    <li>I love being involved in the community and volunteering</li>
                    <li>I've taught myself HTML/CSS, Java and C, and I'm committed to expanding my knowledge
                        in new languages and frameworks</li>
                </ul>
            </div>
         </div>

        <p style="text-align: center; padding-top: 4%">Want to work together? I would love to hear from you!</p>

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

    <!-- SECOND BACKGROUND IMAGE -->
    <div class="bgimg-2">
<!--        <div class="caption"><span class="border">LESS HEIGHT</span></div>-->
    </div>

    <!-- SECOND INFO PANE -->
    <div id="secondPane" style="background-color:white; padding:50px 80px; text-align: justify;">

        <!-- Title -->
        <h3 style="text-align:center;">Global<br>Academics</h3>

        <?php
            include_once "./page_elements/educationText.html";
//            include_once "./page_elements/more_info.html";
        ?>

    </div>

    <!-- AWARDS -->
    <div id="awards" style="background-color:#f5f5f5; padding:50px 80px; text-align: justify;">
        <p style="text-align: center; padding-bottom: 3%">
            <img src="assets/images/pinkribbon.png" alt="Awards" width="80%" style="max-width: 310px"/>
        </p>
        <p style="text-align: center; font-size: 17pt; font-weight: 100">
            <span class="awardTitle">Western University In-Course Scholarship,</span> Recipient, 2016<br>
            <span class="awardTitle">Best Hack to Improve Patient Wait Times in Hospitals,</span> Recipient, 2016<br>
            <span class="awardTitle">Magnet Forensics: Cracking the Code Challenge, Third Place Winner,</span> 2016<br>
            <span class="awardTitle">Western International Learning Award,</span> Recipient, 2016<br>
            <span class="awardTitle">Queen Elizabeth II Silver Jubilee Endowment Fund,</span> Recipient, 2016<br>
            <span class="awardTitle">Robert and Ruth Lumsden Scholarships in Science,</span> Recipient, 2015<br>
            <span class="awardTitle">Western University Scholarship of Excellence,</span> Recipient, 2014<br>
            <span class="awardTitle">Student of Distinction Award,</span> Recipient, 2014<br>
        </p>
    </div>

    <!-- THIRD BACKGROUND IMAGE -->
    <div class="bgimg-3">
<!--        <div class="caption"><span class="border">SCROLL UP</span></div>-->
    </div>

    <!-- THIRD INFO PANE -->
    <div id="thirdPane" style="background-color:white; padding:50px 0; text-align: justify;">

        <!-- Title -->
        <h3 style="text-align:center;">Projects &<br>Designs</h3>

        <?php
            include_once "page_elements/portfolio.html";
        ?>

    </div>

    <footer id="footer">
        <h3>Let's get in touch!</h3>
        <div class="footerDiv" style="padding-top: 3%; padding-bottom: 3%;">
            <div class="col-md-3"></div>
            <div class="col-md-2 col-xs-8 itemlink itemlinka">
                <div class="footerImg">
                    <a href="//linkedin.com/in/alex-madrzyk-775759b9" target="_blank">
                        <img src="assets/images/footer/linkedin.jpg" alt="Linkedin"/>
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-xs-8 itemlink itemlinka">
                <div class="footerImg">
                    <a href="mailto:alexmadrzyk@gmail.com" target="_blank">
                        <img src="assets/images/footer/email.jpg" alt="Email"/>
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-xs-8 itemlink itemlinka">
                <div class="footerImg">
                    <a href="//github.com/amadrzyk" target="_blank">
                        <img src="assets/images/footer/github.jpg" alt="GitHub"/>
                    </a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
<!--        <p>© Alex Madrzyk, 2016</p>-->
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

    <!-- Custom Page Element JavaScript -->
    <script src="page_elements/js/portfolio.js" type="text/javascript"></script>
</body>

</html>