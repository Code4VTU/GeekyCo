<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>GeekyCo</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/colors/green.css" id="colors">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">


    <!-- Header
    ================================================== -->
    @include('partials.navbar')

    <div class="clearfix"></div>

    {{--<div class="container">--}}
        @yield('content')
    {{--</div>--}}

    @include('partials.footer')

    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="/js/jquery-2.1.3.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/jquery.superfish.js"></script>
<script src="/js/jquery.themepunch.tools.min.js"></script>
<script src="/js/jquery.themepunch.revolution.min.js"></script>
<script src="/js/jquery.themepunch.showbizpro.min.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
<script src="/js/chosen.jquery.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/jquery.jpanelmenu.js"></script>
<script src="/js/stacktable.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

@include('partials.flash')

</body>
</html>