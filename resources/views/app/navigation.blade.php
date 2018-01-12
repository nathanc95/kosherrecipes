<!-- main navigation -->
<div class="site-navigation-sticky-wrapper">
    <header id="masthead" class="site-header" role="banner">
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <i class="fa fa-bars"></i>
                            <span class="sr-only">Primary Menu</span>
                        </button>
                        <div class="menu-container">
                            <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                                <li class="menu-item current-menu-item">
                                    <a href="/home">Home</a>
                                </li>
                                <li class="menu-item menu-item-has-children" aria-haspopup="true">
                                    <a href="#">Features</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="/single">Single Post</a></li>
                                        <li class="menu-item"><a href="/single-sidebar">Single Post With Sidebar</a></li>
                                        <li class="menu-item"><a href="/page-fullwidth">Page Full Width</a></li>
                                        <li class="menu-item"><a href="/page-sidebar">Page With Sidebar</a></li>
                                        <li class="menu-item"><a href="/shortcodes">Shortcodes</a></li>
                                        <li class="menu-item"><a href="/typography">Typography</a></li>
                                        <li class="menu-item"><a href="404.html">Not Found</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="/category">Food</a></li>
                                <li class="menu-item"><a href="/category">Cook</a></li>
                                <li class="menu-item"><a href="/about">About Us</a></li>
                                <li class="menu-item"><a href="/contact">Contact</a></li>
                                @if(Auth::check())
                                    <li class="menu-item"><a href="/logout">Logout</a></li>
                                @else
                                    <li class="menu-item" >
                                        <a href="/login" class="nav-link">Login</a>
                                    </li>
                                @endif
                            </ul>
                        </div><!-- .menu-container -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
</div><!-- .site-header-affix-wrapper -->