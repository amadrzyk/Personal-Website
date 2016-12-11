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

    <!-- Normalize (https://github.com/necolas/normalize.css) -->
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Lato:100,200,300,400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href=''//fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Custom Page Element Styles -->
    <link rel="stylesheet" type="text/css" href="page_elements/css/hover_button.css">
    <link rel="stylesheet" type="text/css" href="page_elements/css/portfolio.css">

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
                    <img src="./assets/img/me.png" alt="Alex Madrzyk" height="220px" width="220px"></img>
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

        <!-- Western University -->
        <div class="row educationRow">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <p class="educationYear">
                    2014 – Present
                </p>
            </div>
            <div class="col-md-5">
                <p class="educationTitle">
                    UNIVERSITY OF WESTERN ONTARIO – Faculty of Science
                </p>
                <ul>
                    <li class="educationBullet">Honors Double Major in Medical Sciences and Computer Sciences candidate</li>
                    <li class="educationBullet">Certificate in Practical French</li>
                    <li class="educationBullet">Global Academics Program. VP Social Media in the Western French Club. Dean's Honor Roll, 2014 - Present.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p class="educationLogo">
                    <a href="http://www.csd.uwo.ca/">
                        <img src="./assets/img/education/western.gif" alt="WesternU" height="90px""></img>
                    </a>
                </p>
            </div>
        </div>

        <!-- Harvard University -->
        <div class="row educationRow">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <p class="educationYear">
                    2016 – Present
                </p>
            </div>
            <div class="col-md-5">
                <p class="educationTitle">
                    HARVARD UNIVERSITY – edX Extension School
                </p>
                <ul>
                    <li class="educationBullet">Comprehensive introduction to Computer Science, including
                        algorithms, security, and resource management</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p class="educationLogo">
                    <a href="//www.edx.org/course/introduction-computer-science-harvardx-cs50x">
                        <img src="./assets/img/education/harvardx.png" alt="HarvardX" height="74px""></img>
                    </a>
                </p>
            </div>
        </div>

        <!-- UC Berkeley -->
        <div class="row educationRow">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <p class="educationYear">
                    2016
                </p>
            </div>
            <div class="col-md-5">
                <p class="educationTitle">UNIVERSITY OF CALIFORNIA, BERKELEY – Faculty of Electrical Engineering and Computer Sciences (EECS)</p>
                <ul>
                    <li class="educationBullet">Intensive eight-week summer sessions, 6 total units</li>
                    <li class="educationBullet">Completed CS 61C (Machine Structures) and Psych 7 (Big Data)</li>
                    <li class="educationBullet">Machine Structures teaches the internal organization and operation of
                        digital computers, emphasizing on advances in parallelism. The subjects covered include C
                        and assembly language programming, memory management, how higher level programs are translated
                        into machine language, computer organization, caches, performance measurement, parallelism,
                        CPU design, warehouse-scale computing, and related topics.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p class="educationLogo">
                    <a href="http://www-inst.eecs.berkeley.edu/~cs61c/su16/">
                        <img src="./assets/img/education/berkeley.png" alt="UCBerkeley" height="90px""></img>
                    </a>
                </p>
            </div>
        </div>

        <!-- UdeM -->
        <div class="row educationRow">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <p class="educationYear">
                    2015
                </p>
            </div>
            <div class="col-md-5">
                <p class="educationTitle">
                    UNIVERSITÉ DE MONTRÉAL – Faculty of French Language and Literature
                </p>
                <ul>
                    <li class="educationBullet">Explore Bursary Recipient, chosen by the Council of Ministers of Education, Canada</li>
                    <li class="educationBullet">Intensive five-week language immersion program in Montreal</li>
                    <li class="educationBullet">The program stresses communication, putting the emphasis on oral
                        communication without neglecting the written aspect. Students also learn various grammatical
                        notions that are invaluable for communicating in French.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p class="educationLogo">
                    <a href="http://ecoledelangues.umontreal.ca/en/programs/french-as-a-second-language/explore-bursary/">
                        <img src="./assets/img/education/udem.svg" alt="UdeM" height="90px""></img>
                    </a>
                </p>
            </div>
        </div>

        <!-- MTS -->
        <div class="row educationRow">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <p class="educationYear">
                    2010 – 2014
                </p>
            </div>
            <div class="col-md-5">
                <p class="educationTitle">
                    MOTHER TERESA SECONDARY SCHOOL
                </p>
                <ul>
                    <li class="educationBullet">Certificate of successful French Immersion program completion</li>
                    <li class="educationBullet">Received the Physics award, for the highest grade of the graduating class
                        in Grade 12 University-level Physics</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p class="educationLogo">
                    <a href="http://www.ldcsb.ca/school/MTS/Pages/default.aspx">
                        <img src="./assets/img/education/mts.jpg" alt="MTS" height="110px""></img>
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- AWARDS -->
    <div id="awards" style="background-color:#f5f5f5; padding:50px 80px; text-align: justify;">
        <p style="text-align: center; padding-bottom: 3%">
            <img src="./assets/img/pinkribbon.png" alt="Awards" width="310px"></img>
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

    <!-- Custom Page Element JavaScript -->
    <script src="page_elements/js/portfolio.js" type="text/javascript"></script>
</body>

</html>