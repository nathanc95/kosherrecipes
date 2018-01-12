@extends('layouts.app')
@section('content')
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

      <!-- site branding -->
      <div class="site-branding">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <ul class="social-icon">
                <li><a href="" class="icon-twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="" class="icon-facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="" class="icon-instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="" class="icon-pinterest"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="" class="icon-youtube"><i class="fa fa-youtube-play"></i></a></li>
              </ul>
            </div><!-- .col-md-3 -->

            <div class="col-md-6">
              <h1 class="site-title title-image"><a href="index.html" rel="home"><img src="assets/img/astrif-logo.png" alt="astrif."></a></h1>
              <p class="site-description">- Good Food Lovers -</p>
            </div><!-- .col-md-6 -->

            <div class="col-md-3">
              <form class="search-form">
                <div class="form-group">
                  <label for="search" class="sr-only">Search</label>
                  <input type="text" class="form-control search-field" placeholder="Search...">
                </div><!-- .form-group -->
                <button type="submit" class="btn btn-default search-submit"><i class="fa fa-search"></i></button>
              </form><!-- .search-form -->
            </div><!-- .col-md-3 -->
          </div><!-- .row -->
        </div><!-- .container -->
      </div><!-- .site-branding -->

      <!-- main navigation -->
      <div class="site-navigation-sticky-wrapper">
        <header id="masthead" class="site-header" role="banner">
          <nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i><span class="sr-only">Primary Menu</span></button>
                  <div class="menu-container">
                    <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                      <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                      <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="#">Features</a>
                        <ul class="sub-menu">
                          <li class="menu-item"><a href="single.blade.php">Single Post</a></li>
                          <li class="menu-item"><a href="single-sidebar.blade.php">Single Post With Sidebar</a></li>
                          <li class="menu-item"><a href="page-fullwidth.blade.php">Page Full Width</a></li>
                          <li class="menu-item"><a href="page-sidebar.blade.php">Page With Sidebar</a></li>
                          <li class="menu-item current-menu-item"><a href="shortcodes.blade.php">Shortcodes</a></li>
                          <li class="menu-item"><a href="typography.blade.php">Typography</a></li>
                          <li class="menu-item"><a href="404.html">Not Found</a></li>
                        </ul>
                      </li>
                      <li class="menu-item"><a href="category.blade.php">Food</a></li>
                      <li class="menu-item"><a href="category.blade.php">Cook</a></li>
                      <li class="menu-item"><a href="about.blade.php">About Me</a></li>
                      <li class="menu-item"><a href="contact.blade.php">Contact</a></li>
                    </ul>
                  </div><!-- .menu-container -->
                </div><!-- .col-md-12 -->
              </div><!-- .row -->
            </div><!-- .container -->
          </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
      </div><!-- .site-header-affix-wrapper -->

      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

            <div class="container">
              <div class="row">
                <!-- article -->
                <div class="col-md-8 col-md-offset-2">
                  <div class="site-entry">
              
                    <article class="post format-standard hentry">
                      <div class="entry-header">
                        <h1 class="entry-title">Shortcodes</h1>
                      </div><!-- .entry-header -->

                      <div class="entry-content">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="section-title">
                              <h3>Alert</h3>
                            </div>
                            <div class="alert alert-success" role="alert">
                              <strong>Well done!</strong> You successfully read this important alert message.
                            </div>
                            <div class="alert alert-info" role="alert">
                              <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                            </div>
                            <div class="alert alert-warning" role="alert">
                              <strong>Warning!</strong> Better check yourself, you're not looking too good.
                            </div>
                            <div class="alert alert-danger" role="alert">
                              <strong>Oh snap!</strong> Change a few things up and try submitting again.
                            </div>
                          </div><!-- .col-md-6 -->

                          <div class="col-md-6">
                            <div class="section-title">
                              <h3>Label</h3>
                            </div>
                            <span class="label label-default">Default</span>
                            <span class="label label-primary">Primary</span>
                            <span class="label label-success">Success</span>
                            <span class="label label-info">Info</span>
                            <span class="label label-warning">Warning</span>
                            <span class="label label-danger">Danger</span>

                            <div class="section-title">
                              <h3>Progress Bar</h3>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (warning)</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                              </div>
                            </div>

                            <p class="text-center">Stripped</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div>

                            <p class="text-center">Animated</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                            </div>

                          </div><!-- .col-md-6 -->
                        </div><!-- .row -->       
                        <div class="row">
                          <div class="col-md-12 text-center">
                            <div class="section-title">
                              <h3>Button</h3>
                            </div>
                            <p>Bordered Button</p>
                            <input type="button" value="button">
                            <a href="#" class="button"><i class="fa fa-instagram"></i> Icon in button</a>
                            <br><br>
                            <p>Standard Button</p>
                            <!-- Standard button -->
                            <button type="button" class="btn btn-default">Default</button>
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-link">Link</button>
                            <br><br>
                            <p>Button Sizing</p>
                            <button type="button" class="btn btn-primary btn-lg">Button large</button>
                            <button type="button" class="btn btn-success">Button Medium</button>
                            <button type="button" class="btn btn-info btn-sm">Button Small</button>
                            <button type="button" class="btn btn-warning btn-xs">Button Extra Small</button>
                            <br><br>
                            <p>Button Fullwidth</p>
                            <button type="button" class="btn btn-danger btn-block btn-lg">Block level button</button>
                          </div><!-- .col-md-12 -->
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col-md-12 text-center">
                            <div class="section-title">
                              <h3>Social Icon</h3>
                            </div>
                            <ul class="social-icon">
                              <li><a href="" class="icon-social icon-facebook"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="" class="icon-social icon-twitter"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="" class="icon-social icon-instagram"><i class="fa fa-instagram"></i></a></li>
                              <li><a href="" class="icon-social icon-youtube"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a href="" class="icon-social icon-pinterest"><i class="fa fa-pinterest"></i></a></li>
                              <li><a href="" class="icon-social icon-google-plus"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-vimeo"></i></a></li>
                              <li><a href="" class="icon-social icon-dribbble"><i class="fa fa-dribbble"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-tumblr"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-vine"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-behance"></i></a></li><br>
                              <li><a href="" class="icon-social"><i class="fa fa-reddit"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-soundcloud"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-vk"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-lastfm"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-github"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-paypal"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-digg"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-foursquare"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-wordpress"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-stack-overflow"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-delicious"></i></a></li>
                              <li><a href="" class="icon-social"><i class="fa fa-slideshare"></i></a></li>
                            </ul>
                          </div><!-- .col-md-12 -->
                        </div><!-- .row -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="section-title">
                              <h3>Accordion</h3>
                            </div>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                  <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Do you agree?
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                    I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      What we wanna do?
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="panel-body">
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div><!-- .col-md-6 -->
                          <div class="col-md-6">
                            <div class="section-title">
                              <h3>Tabs</h3>
                            </div>
                            <ul class="nav nav-tabs" id="myTabs" role="tablist">
                              <li role="presentation" class="active">
                                <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a>
                              </li>
                              <li role="presentation" class="">
                                <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a>
                              </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade active in" role="tabpanel" id="home" aria-labelledby="home-tab">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                              </div>
                              <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">
                                <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
                              </div>
                            </div>
                          </div><!-- .col-md-6 -->
                        </div><!-- .row -->

                      </div><!-- .entry-content -->
                    </article><!-- .post -->
                  </div><!-- .site-entry -->
                </div><!-- .col-md-8 -->
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->
@endsection