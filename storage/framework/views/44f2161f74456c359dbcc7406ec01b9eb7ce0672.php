<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.axiata.com/datathon/bd/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 19:06:48 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description"
        content="Organised by Robi Axiata Ltd. and supported by Axiata Analytics, Datathon Bangladesh 2019 is the first Bangladesh’s biggest datathon revolving around Big Data and Machine Learning to solve business problems.">
    <meta name="keywords" content="datathon, IoT, 5G internet, smart car, data science, axiata analytics">

    <meta property="og:image" content="<?php echo e(asset('summit/img/logo.png')); ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <link rel="icon" href="<?php echo e(asset('summit/img/logo.png')); ?>">

    <title>2nd DIU DS Summit 2021</title>

    <link href="<?php echo e(asset ('summit/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('summit/css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('summit/css/maind387.css?v8')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('summit/css.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset ('summit/css/axiata-fonts.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('summit/css/ionicons.min.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('summit/slick/slick.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('summit/slick/slick-theme6654.css?v1')); ?>">

    <style>
        .collapsible {
          background-color: rgb(54, 168, 105);
          color: white;
          cursor: pointer;
          padding: 18px;
          width: 100%;
          border: none;
          text-align: middle;
          outline: none;
          font-size: 15px;
        }

        .active, .collapsible:hover {
          background-color: rgb(54, 168, 105);
        }

        .content {
          padding: 0 18px;
          display: none;
          overflow: hidden;
          background-color: #f1f1f1;
        }
        </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114855611-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-114855611-2');

    </script>



</head>

<body>
    <?php if(Session::has('message')): ?>
    <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>


    <nav id="mainNav" class="navbar navbar-custom navbar-fixed-top affix">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#home"><img src="<?php echo e(asset('summit/img/logo.png')); ?>"
                        width="100%"></a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden-lg hidden-md"><a href="#about" class="page-scroll">About Our Program</a></li>
                    <li class="hidden-xs hidden-sm"><a href="#about" class="page-scroll-sm">About Our Program</a></li>
                    <li><a href="#guests" class="page-scroll">Guests</a></li>
                    <li><a href="#speakers" class="page-scroll">Speakers</a></li>
                    <li><a href="#judge" class="page-scroll">Judge</a></li>
                    <li><a href="#prizes" class="page-scroll">Prizes</a></li>
                    <li><a href="#schedule" class="page-scroll">Schedule</a></li>
                    <li><a href="#registration" class="page-scroll">Registration</a></li>



                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <header id="home">
        <div class="container center">
            <div class="row">

                <div class="col-xs-12 text-center topab">
                    <img src="<?php echo e(asset('summit/img/logo.png')); ?>" width="100%" class="col-centered masthead">
                    <div class="bg-light text-dark precap">
                        <b>2nd DIU DATA SCIENCE SUMMIT 2021 <br>11th December 2021</b>
                    </div>
                    <p>Daffodil Smart City, Ashulia, Dhaka</p>
                    <a href="#registration" class="general-btn page-scroll">
                        <div class="plusign"></div>
                        <div class="outline">Register now</div>
                    </a>
                </div>

                <a href="#about" class="page-scroll arrow-down hidden-lg hidden-md">
                    <img src="<?php echo e(asset('summit/img/dataunchained-arrowdown-white-1.png')); ?>">
                    <img src="<?php echo e(asset('summit/img/dataunchained-arrowdown-white-2.png')); ?>">
                    <img src="<?php echo e(asset('summit/img/dataunchained-arrowdown-white-3.png')); ?>">
                </a>
                <a href="#about" class="page-scroll-sm arrow-down hidden-xs hidden-sm">
                    <img src="<?php echo e(asset('summit/img/dataunchained-arrowdown-white-1.png')); ?>">
                    <img src="<?php echo e(asset('summit/img/dataunchained-arrowdown-white-2.png')); ?>">
                    <img src="<?php echo e(asset('summit/img/dataunchained-arrowdown-white-3.png')); ?>">
                </a>

                <!--a href="#" class="arrowdown"><span class="arrow"><span></span></span></a-->

            </div>
        </div>
    </header>





    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2 col-xs-12">
                    <h1>About 2nd DIU Data Science Summit 2021</h1>
                    <p>Organised by Data Science Lab DIU. and supported by Department of Software Engineering, Datathon
                        Bangladesh 2020 is Bangladesh’s first and biggest datathon revolving around the role of Big Data
                        and Machine Learning in solving business problems.</p>

                    <p>This is your chance to flex your data analytics muscles and develop thought-provoking business
                        solutions.</p>

                    <p>You’ll have access to a complex dataset to establish your insights and models that could
                        eventually lead to real-world solutions.</p>


                </div>

            </div>
        </div>
    </section>

    <div class="text-center">
        <h1 class="marbtm30">Honorable Guest</h1>
    </div>
    <section id="guests" style="background: rgb(223, 165, 165);">
        <div class="container">
            <div class="row"><br>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>

            </div>
        </div>
        <br>
    </section><br>


    <div class="text-center">
        <h1 class="marbtm30">Seminar & Workshop Speakers</h1>
    </div>
    <section id="speakers" style="background: rgb(90, 87, 87);">
        <div class="container">
            <div class="row"><br>

                <div class="col-md-3 col-sm-6 mx-auto d-block">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mx-auto d-block">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mx-auto d-block">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mx-auto d-block">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>
                </div>
        </div>
        <br>


    </section><br>


    <section id="judge" style="background: rgb(12, 12, 12);">
        <div class="container">
            <div class="row"><br>
                <div class="text-center">
                    <h1 class="marbtm30">Judges</h1>
                </div>

                <div class="col-md-3 col-sm-6 mx-auto d-block">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mx-auto d-block">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mx-auto d-block">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mx-auto d-block">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?php echo e(asset('summit/img/speakers/s1.png')); ?>">
                        </div>
                        <h3 class="title">Name: Comming Soon</h3>
                        <span class="post">Designation: Comming Soon</span>
                        <span class="post">Institution: Comming Soon</span>

                    </div>
                </div>
                </div>
        </div>
        <br>


    </section><br>



    <!-- prize section -->
    <section id="prizes">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 text-center marbtm50">
                    <h1>Prizes</h1>
                    <p style="color:#ffffff">Prizes are equivalent to BDT as followings</p>
                </div>


                <div class="col-md-12 col-xs-12 text-center">
                    <h2 class="text-center martop20">TEAM</h2>
                    <div class="subcontent hidden-xs hidden-sm"></div>

                    <div class="outlinecover page-scroll">
                        <div class="outline">
                            <h3 class="special">Champion Team</h3>
                            <p class="prizes">BDT 15K</p>
                        </div>
                    </div>

                    <div class="outlinecover page-scroll">
                        <div class="outline">
                            <h3 class="special">First Runner-up</h3>
                            <p class="prizes">BDT 10K</p>
                        </div>
                    </div>

                    <div class="outlinecover page-scroll">
                        <div class="outline">
                            <h3 class="special">Second Runner-up</h3>
                            <p class="prizes">BDT 5K</p>
                        </div>
                    </div>

                </div>

                <!--
                <div class="col-md-6 col-xs-12 text-center">
                    <div class="marbtm80 hidden-lg hidden-md"></div>
                    <h2 class="text-center martop20">Individual</h2>
                    <div class="subcontent hidden-xs hidden-sm"></div>
                    <div class="outlinecover page-scroll">
                        <div class="outline">
                            <h3 class="special">2 Data Scientists</h3>
                            <p class="prizes">BDT 100K each</p>

                        </div>
                    </div>

                    <div class="outlinecover page-scroll">
                        <div class="outline">
                            <h3 class="special">2 Data Engineers</h3>
                            <p class="prizes">BDT 100K each</p>

                        </div>
                    </div>


                </div>
 -->


                <div class="col-md-8 col-md-offset-2 col-xs-12 text-center martop40">
                    <p class="mininotes"></p>
                </div>

            </div>

            <div style="text-align: center">
                <span style="color:#ffffff">*Data Science Lab DIU</span>
            </div>
        </div>
    </section>

    <section id="schedule">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 text-center">
                    <h1 class="marbtm30">2nd DIU Data Science Summit 2021 Event Schedule</h1>
                </div>

                <div class="col-xs-12 mobnoleftrightpad tab-nlr">
                    <div class="action text-center">
                        <a href="#" class="tabbed-btn active" data-slide="1">
                            <div class="plusign"></div>
                            <div class="outline">
                                <b>11<sup style="text-transform: lowercase;">th</sup> December,</b> Saturday
                            </div>

                        </a>
                    </div>
                </div>


                <div class="col-md-8 col-md-offset-2 col-xs-12 gallerytxt light">
                    <div class="slider regular">

                        <div>
                            <h3>2nd DIU Data Science &amp; Summit-2021 (10:00am - 5:00pm)</h3>
                            <ul class="cover text-left">
                                <li><b>Opening Session - </b> (9:00AM - 9:30AM)</li>
                                <li><b>PhotoShoot - </b>(9:30AM - 9:45AM)</li>
                                <li><b>Panel Discussion - Each Discusstion 20 minutes</b>(9:45AM - 10:05AM , 10:05AM
                                    - 10:25AM)</li>
                                <li><b>Workshop - Each Workshop 30 minutes</b>(10:25AM - 10:55AM, 10:55AM - 11:25AM,
                                    11:25AM - 11:55AM)</li>
                                <li><b>Seminar -</b> (11:55AM - 12:35PM)</li>
                                <li><b>Lunch Break -</b>(12:35PM - 1:30PM)</li>
                                <li><b>Hackathon -</b>(1:30PM - 4:00PM)</li>
                                <li><b>Prize Giving Ceremony-</b>(4:00PM - 4:30PM)</li>
                                <li><b>Ending Session -</b>(4:30PM - 5:00PM)</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>





    <section id="registration">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 text-center">
                    <h1>Registration process</h1>
                    <p class="marbtm40">(Starting from 25<sup>th</sup> March to 15<sup>th</sup> April 2019)</p>
                </div>

                <div class="col-md-offset-3 col-md-6 col-xs-12 equal-box">
                    <div class="outlinecover page-scroll" style="height:95%;">
                        <div class="outline">
                            <h2>Register as a<br class="hidden-xs hidden-sm">participant</h2>
                            <p>Participants will be invited to complete an online assessment to qualify for the datathon.</p>
                            <div class="marbtm20 clearfix"></div>
                            <a href="#challenge">
                                Register now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="challenge">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2 col-xs-12 text-center marbtm50">
                    <h1>Registered your favorite events</h1>

                </div>

                <div>
                    <button type="button" class="collapsible"><b> Registration for Hackthon </b></button>
                    <div class="content">
                        <p class="text-center">
                            <h4>**For hackathon groups regirtration fee 1200 BDT (Maximum 3 person in a group)**</h4>
                           <div class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, deserunt!</div>

                        </p>

                        <div>
                            <form action="<?php echo e(route('summitinfo.store')); ?>"  method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Team Name*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter your team name" name="gname">
                                        <?php $__errorArgs = ['gname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Team Member Name(1)*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter 1st group member name in your team" name="name1">
                                        <?php $__errorArgs = ['name1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Team Member Name(2)*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter 2nd group member name in your team" name="name2">
                                        <?php $__errorArgs = ['name2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Team Member Name(3)</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter 3rd group member name in your team" name="name3">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ente Phone Number*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter one group member phone number for contact" name="phone">
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Email ID*</label>
                                    <input type="email" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter one group member email in your team" name="gmail">
                                        <?php $__errorArgs = ['gmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter University Name*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter university name of your team" name="varsity">
                                        <?php $__errorArgs = ['varsity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Transection ID*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter transaction id of your transaction" name="trid">
                                        <?php $__errorArgs = ['trid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Your Information for Hackthon</button>
                            </form>
                        </div>
                    </div>
                    <button type="button" class="collapsible"><b>Registration for Seminar</b></button>
                    <div class="content">
                        <p class="text-center">
                            <h4 class="text-center">**For Seminar regirtration fee 100 BDT**</h4>
                           <div class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, deserunt!</div>

                        </p>

                        <div>
                            <form action="<?php echo e(route('seminarinfo.store')); ?>"  method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Your Name*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter your name" name="name">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter University Name*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter university name of your team" name="varsity">
                                        <?php $__errorArgs = ['varsity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Department Name*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter university name of your team" name="dept">
                                        <?php $__errorArgs = ['dept'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Seminar Name which one you will attend*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter university name of your team" name="sname">
                                        <?php $__errorArgs = ['sname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ente Phone Number*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter one group member phone number for contact" name="phone">
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Email ID*</label>
                                    <input type="email" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter one group member email in your team" name="gmail">
                                        <?php $__errorArgs = ['gmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Transection ID*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter transaction id of your transaction" name="trid">
                                        <?php $__errorArgs = ['trid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Your Information for Seminar</button>
                            </form>
                        </div>
                    </div>
                    <button type="button" class="collapsible"><b>Registration for workshop</b></button>
                    <div class="content">
                        <p class="text-center">
                            <h4 class="text-center">**For Workshop regirtration fee 100 BDT**</h4>
                           <div class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, deserunt!</div>

                        </p>

                        <div>
                            <form action="<?php echo e(route('workshopinfo.store')); ?>"  method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Your Name*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter your name" name="name">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter University Name*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter university name of your team" name="varsity">
                                        <?php $__errorArgs = ['varsity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Department Name*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter university name of your team" name="dept">
                                        <?php $__errorArgs = ['dept'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Workshop Name which one you will attend*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter university name of your team" name="wname">
                                        <?php $__errorArgs = ['wname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ente Phone Number*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter one group member phone number for contact" name="phone">
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter Email ID*</label>
                                    <input type="email" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter one group member email in your team" name="gmail">
                                        <?php $__errorArgs = ['gmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Transection ID*</label>
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter transaction id of your transaction" name="trid">
                                        <?php $__errorArgs = ['trid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Your Information for Workshop</button>
                            </form>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </section>






<section id="partnership" style="margin-left: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 text-center martop60">
                    <div class="textcover">
                        <h2>Organisers</h2>
                        <div class="col-md-12 martop20">
                            <a href="https://dslab.daffodilvarsity.edu.bd/" target="_blank"><img
                                    src="<?php echo e(asset('summit/img/dslogo.png')); ?>" alt="dslab"></a>
                            <p class="martop20">Department of Software Engineering offers the program of B.Sc. in
                                Software Engineering. The program is designed to produce skilled manpower for global
                                IT market in order to satisfy the growing demands of software professionals
                                throughout the world.</p>
                            <p>It provides the students an opportunity to gain a vast knowledge about the overall
                                Software Engineering process as well as Computer Programming, Computer Systems
                                Engineering, Telecommunication Engineering and Electronics Engineering. The central
                                goal is to create knowledgeable, efficient and skilled software engineering
                                graduates so that they are able to make themselves competent to work on not only
                                with the Software Industries in home country but also with any giant technological
                                organization of the world.</p>
                        </div>

                        <!--
                        <div class="col-md-6 martop20">
                            <a href="https://axiata.com/" target="_blank"><img src="img/logo-axiata.png" alt="Axiata"></a>
                            <p class="martop20">Axiata Group Berhad is one of the leading telecommunications groups in Asia with approximately 350 million customers.</p>
                            <p>Its Operating Companies include Celcom, Dialog (Sri Lanka), XL (Indonesia), Smart (Cambodia), Robi (Bangladesh) and Ncell (Nepal).</p>
                        </div>
-->


                    </div>

                </div>

                <div class="col-sm-6 col-xs-12 text-center martop60">
                    <div class="textcover">
                        <h2>Our Data Science Summit 2021 Partners</h2>
                        <div class="col-md-6 col-md-offset-2 martop20 text-center">
                            <a href="https://daffodilvarsity.edu.bd/" target="_blank"><img
                                    src="<?php echo e(asset('summit/img/diu-logo.png')); ?>"></a>
                            <!--
                            <a href="https://www.ericsson.com/en" target="_blank"><img src="img/logo-ericsson.png"></a>
                            <a href="https://www.lynxanalytics.com/" target="_blank"><img src="img/logo-lynx.png"></a>
-->
                            <a href="https://daffodilvarsity.edu.bd/department/swe" target="_blank"><img
                                    src="<?php echo e(asset('summit/img/swe.png')); ?>"></a>
                            <!-- <a href="https://axiata.com/" target="_blank"><img src="<?php echo e(asset('summit/img/logo-axiata-sm.png')); ?>"></a> -->
                            <!--
                            <a href="http://www.bigittechnology.com/bigit/" target="_blank"><img src="img/logo-bigit.png"></a>
                            <a href="https://www.microsoft.com/en-my/" target="_blank"><img src="img/logo-microsoft.png"></a>
                            <a href="https://www.iota.org/" target="_blank"><img src="img/logo-iota.png"></a>
-->
                        </div>
                    </div>

                </div>


            </div>
        </div>
</section>


<section id="datahon">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h6>Have questions regarding the Summit 2021?</h6>
                    <a href="<?php echo e(url('/contact')); ?>" class="sm-general-btn">
                        <div class="plusign"></div>
                        <div class="outline">Contact Us</div>
                    </a>
                </div>
            </div>
        </div>
</section>


<footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="https://dslab.daffodilvarsity.edu.bd/" target="_blank" style="color: #ccc;">DIU Data
                        Science Lab </a>
                    <div style="display: block; min-height: 7px;" class="visible-xs"></div>
                    <span class="hidden-xs">&nbsp; &nbsp; | &nbsp; &nbsp;</span>
                    <!-- <a href="https://www.axiata.com/axiata-personal-data-and-privacy-notice.html" target="_blank" style="color: #ccc;">Personal Data &amp; Privacy Notice</a<span class="hidden-xs">&nbsp; &nbsp; | &nbsp; &nbsp;</span>>-->
                    <div class="hidden visible-xs" style="height: 6px;"></div>© <script>
                        2021

                    </script> by Daffodil International University Department of Software Engineering
                </div>
            </div>
        </div>
</footer>

    <!-- Bootstrap core JavaScript

    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(asset('summit/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('summit/js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('summit/js/bootstrap.js')); ?>"></script>

    <script src="<?php echo e(asset('slick/slick.min.js')); ?>" type="text/javascript" charset="utf-8"></script>

    <script src="<?php echo e(asset('summit/js/main6654.js?v1')); ?>"></script>
    <script src="<?php echo e(asset('summit/js/jquery.matchHeight-min.js')); ?>"></script>
    <script type="<?php echo e(asset('summit/text/javascript')); ?>">
        $('.equal-box').matchHeight();

    </script>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
        </script>



</body>


<!-- Mirrored from www.axiata.com/datathon/bd/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 19:07:06 GMT -->

</html>
<?php /**PATH H:\Projects\DSLab\resources\views/frontend/summit.blade.php ENDPATH**/ ?>