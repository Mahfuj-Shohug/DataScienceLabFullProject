<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description"
        content="Organised by Robi Axiata Ltd. and supported by Axiata Analytics, Datathon Bangladesh 2019 is the first Bangladesh’s biggest datathon revolving around Big Data and Machine Learning to solve business problems.">
    <meta name="keywords" content="datathon, IoT, 5G internet, smart car, data science, axiata analytics">

    <meta property="og:image" content="{{ asset('summit/img/logo.png') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <link rel="icon" href="{{ asset('summit/img/logo.png') }}">

    <title>2nd DIU DS Summit 2021</title>

    <link href="{{ asset ('summit/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('summit/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset ('summit/css/maind387.css?v8') }}" rel="stylesheet">
    <link href="{{ asset ('summit/css.css') }}" rel="stylesheet">

    <link href="{{ asset ('summit/css/axiata-fonts.css') }}" rel="stylesheet">
    <link href="{{ asset ('summit/css/ionicons.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('summit/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('summit/slick/slick-theme6654.css?v1') }}">
    <style>
        .dropbtn {
    background-color: rgb(54, 168, 105);
    color: white;
    padding: 18px
;
    width: 159px
;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    color: rgb(54, 168, 105);
    background-color: white;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  /* display: block; */
}

/* Change color of dropdown links on hover */
/* .dropdown-content a:hover {background-color: #ddd} */

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
    </style>

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
    @if(Session::has('message'))
    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif


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
                <a class="navbar-brand page-scroll" href="#home"><img src="{{ asset('summit/img/logo.png') }}"
                        width="100%"></a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/summit2021') }}" class="page-scroll">Home</a></li>
                    <li><a href="{{ url('/summit2021-guests') }}" class="page-scroll">Guests</a></li>
                    <li><a href="#registration" class="page-scroll">Registration</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <header id="home">
        <div class="container center">
            <div class="row">

                <div class="col-xs-12 text-center topab">
                    <img src="{{asset('summit/img/logo.png')}}" width="100%" class="col-centered masthead">
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
                    <img src="{{asset('summit/img/dataunchained-arrowdown-white-1.png')}}">
                    <img src="{{asset('summit/img/dataunchained-arrowdown-white-2.png')}}">
                    <img src="{{asset('summit/img/dataunchained-arrowdown-white-3.png')}}">
                </a>
                <a href="#about" class="page-scroll-sm arrow-down hidden-xs hidden-sm">
                    <img src="{{asset('summit/img/dataunchained-arrowdown-white-1.png')}}">
                    <img src="{{asset('summit/img/dataunchained-arrowdown-white-2.png')}}">
                    <img src="{{asset('summit/img/dataunchained-arrowdown-white-3.png')}}">
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






    <!-- prize section -->
    <section id="prizes">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 text-center marbtm50">
                    <h1>Prizes</h1>
                    <p style="color:#ffffff">Prizes are equivalent to BDT as followings</p>
                </div>


                <div class="col-md-12 col-xs-12 text-center">
                    <div class="subcontent hidden-xs hidden-sm"></div>

                    <div class="outlinecover page-scroll">
                        <div class="outline">
                            <h3 class="special">Total Prize Money for Hackthon</h3>
                            <p class="prizes">BDT 35K</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2 col-xs-12 text-center martop40">
                    <p class="mininotes"></p>
                </div>

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
                    <p class="marbtm40">(Starting from 25<sup>th</sup> March to 15<sup>th</sup> April 2021)</p>
                </div>

                <div class="col-md-offset-3 col-md-6 col-xs-12 equal-box">
                    <div class="outlinecover page-scroll" style="height:95%;">
                        <div class="outline">
                            <h2>Register as a<br class="hidden-xs hidden-sm">participant</h2>
                            <p>Participants will be invited to complete an online assessment to qualify for the datathon.</p>
                            <div class="marbtm20 clearfix">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn">Registration</button>
                                    <div id="myDropdown" class="dropdown-content">
                                      <a href="{{ url('/summit2021-hackthon') }}">Hackthon</a>
                                      <a href="{{ url('/summit2021-seminar') }}">Seminar</a>
                                      <a href="{{ url('/summit2021-workshop') }}">workshop</a>
                                    </div>
                                  </div>
                            </div>

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
                                    src="{{asset('summit/img/dslogo.png')}}" alt="dslab"></a>
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
                                    src="{{asset('summit/img/diu-logo.png')}}"></a>
                            <!--
                            <a href="https://www.ericsson.com/en" target="_blank"><img src="img/logo-ericsson.png"></a>
                            <a href="https://www.lynxanalytics.com/" target="_blank"><img src="img/logo-lynx.png"></a>
-->
                            <a href="https://daffodilvarsity.edu.bd/department/swe" target="_blank"><img
                                    src="{{asset('summit/img/swe.png')}}"></a>
                            <!-- <a href="https://axiata.com/" target="_blank"><img src="{{asset('summit/img/logo-axiata-sm.png')}}"></a> -->
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
                    <a href="{{ url('/contact') }}" class="sm-general-btn">
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
    <script src="{{asset('summit/js/jquery.js')}}"></script>
    <script src="{{asset('summit/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('summit/js/bootstrap.js')}}"></script>

    <script src="{{asset('slick/slick.min.js')}}" type="text/javascript" charset="utf-8"></script>

    <script src="{{asset('summit/js/main6654.js?v1')}}"></script>
    <script src="{{asset('summit/js/jquery.matchHeight-min.js')}}"></script>
    <script type="{{asset('summit/text/javascript')}}">
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

            /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
        </script>



</body>


<!-- Mirrored from www.axiata.com/datathon/bd/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Nov 2021 19:07:06 GMT -->

</html>
