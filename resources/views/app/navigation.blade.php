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
                                    <router-link to="/home" class="menu-item" activeClass="active"><a>Home</a></router-link>
                                </li>
                                <li class="menu-item">
                                    <router-link to="/category" class="menu-item" activeClass="active"><a>Category</a></router-link>
                                </li>
                                <li class="menu-item"><a href="/about">About Us</a></li>
                                <li class="menu-item">
                                    <li class="menu-item"><a href="/logout">Logout</a></li>
                                    <li class="menu-item" >
                                        <a href="/login" class="nav-link">Login</a>
                                    </li>
                            </ul>
                        </div><!-- .menu-container -->
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
</div><!-- .site-header-affix-wrapper -->