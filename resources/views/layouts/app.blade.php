<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Astrif responsive food blogging theme">
    <meta name="keywords" content="astrif, food blog, blogging, responsive, personal blog">
    <meta name="author" content="templateninja">
    <title>Astrif</title>

    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Oswald:700" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/owl.theme.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/skin.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('plugins/html5shiv.min.js')}}"></script>
    <script src="{{asset('plugins/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body class="home blog">
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>



@include('app.branding')

@yield('content')
<!-- site-footer -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <!-- footer subscribe -->
    <div class="footer-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <h3 class="subscribe-title">Subscribe</h3>
                    <p>Subscribe your e-mail address and get fresh stuff through email notifications.</p>
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email address">
                        </div>
                        <button type="submit" class="btn btn-default">Sign up</button>
                    </form><!-- .form-inline -->
                </div><!-- .col-## -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-subscribe -->

    <!-- footer instagram -->
    <div class="footer-instagram">
        <div class="instagram-title">
            <h3>insta <i class="fa fa-instagram"></i> gram</h3>
            <span class="instagram-subtitle">Know me better</span>
        </div>

        <div class="instagram-widget">
            <ul>
                <li><a href=""><img src="{{asset('img/astrif-post-entry-02.jpg')}}" alt=""></a></li>
                <li><a href=""><img src="{{asset('img/astrif-post-entry-02.jpg')}}" alt=""></a></li>
                <li><a href=""><img src="{{asset('img/astrif-post-entry-04.jpg')}}" alt=""></a></li>
                <li><a href=""><img src="{{asset('img/astrif-post-entry-05.jpg')}}" alt=""></a></li>
                <li><a href=""><img src="{{asset('img/astrif-post-entry-06.jpg')}}" alt=""></a></li>
                <li><a href=""><img src="{{asset('img/astrif-post-entry-07.jpg')}}" alt=""></a></li>
            </ul>
            <p class="instagram-follow"><a href="http://instagram.com/templateninja" target="_blank" class="btn btn-default">@templateninja</a></p>
        </div>


    </div><!-- .footer-instagram -->
</footer><!-- #site-footer -->

<!-- copyright -->
<section id="copyright" class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                Copyright &copy; 2016 <a href="http://templateninja.net" target="_blank"><strong>Astrif</strong></a>. All Right Reserved.
            </div><!-- .col-sm-6 -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- #copyright -->

</div><!-- #page -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('plugins/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('plugins/owl.carousel.min.js')}}"></script>
<script src="{{asset('plugins/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/navigation.js')}}"></script>
<script src="{{asset('js/skip-link-focus-fix.js')}}"></script>
<script src="{{asset('js/script.min.js')}}"></script>

</body>
</html>