<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

<!-- Font -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CMontserrat:400,700%7CPlayfair+Display:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Css -->
    <link rel="stylesheet" href="css/core.min.css" />
    <link rel="stylesheet" href="css/skin.css" />

    <!--[if lt IE 9]>
<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    </head>
    <body class="home-page">
        <div class="wrapper">
            <div class="wrapper-inner">
                <div class="content clearfix">
                    @yield('content')
                </div>
            </div>
        </div>
    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
    <script src="js/timber.master.min.js"></script>
    </body>
</html>

