<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 09:40:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>Registration For Hackthon</title>

    <link href="{{asset('registration/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('registration/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">

    <style id="" media="all">
        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOiCnqEu92Fr1Mu51QrEzAdKg.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc6CsE.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xIIzc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc6CsE.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic6CsE.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TLBCc6CsE.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1MmgVxIIzc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBBc9.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBBc9.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBBc9.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            src: url(https://colorlib.com/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmYUtfBBc9.ttf) format('truetype');
        }

    </style>

    <link href="{{asset('registration/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/datepicker/daterangepicker.css" rel="stylesheet')}}" media="all">

    <link href="{{asset('registration/css/main.css')}}" rel="stylesheet" media="all">
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <div style="background-color: red">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                         @endif
                    </div>
                    <h2 class="title">Registration For Seminar</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, libero.</p><br>

                    <form action="{{route('seminarinfo.store')}}"  method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter your name*" name="name">
                                @error('name') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter university name*" name="varsity">
                                @error('varsity') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter department name*" name="dept">
                             @error('dept') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter Seminar Name which one you will attend*" name="sname">
                             @error('sname') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Ente Phone Number*" name="phone">
                             @error('phone') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="input-group">
                            <input type="email" class="form-control" id="gname" aria-describedby="gname"
                            placeholder="Enter Email ID*" name="gmail">
                            @error('gmail') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="gname" aria-describedby="gname"
                                        placeholder="Enter transaction id*" name="trid">
                                        @error('trid') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit Your Registration</button>
                        </div>
                    </form>
                </div>

            <section>
                <div style="text-align: center">
                    <a href="{{ url('/summit2021') }}">Go back to main Summit-2021 page</a>
                </div>
            </section>
            </div>
        </div>
    </div>



    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/datepicker/daterangepicker.js')}}"></script>

    <script src="{{asset('js/global.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
    <script defer src="../../../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"6af8002bcff9497b","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 09:41:05 GMT -->

</html>
