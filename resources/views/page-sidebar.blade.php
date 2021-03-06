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
                          <li class="menu-item current-menu-item"><a href="page-sidebar.blade.php">Page With Sidebar</a></li>
                          <li class="menu-item"><a href="shortcodes.blade.php">Shortcodes</a></li>
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
                <div class="col-md-8">
                  <div class="site-entry">
              
                    <article class="post format-standard hentry">
                      <div class="entry-header">
                        <h1 class="entry-title">Page With Sidebar</h1>
                      </div><!-- .entry-header -->
                      
                      <div class="entry-content">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. </p>
                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
                        <h2>She packed her seven versalia</h2>
                        <p>She packed her seven versalia, put her initial <em>into the belt and made herself</em> on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                        <h3>Pityful a rethoric question</h3>
                        <p>Pityful a rethoric question ran over her cheek, then <strong>she continued</strong> her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times.</p>
                        <h4>And everything that was left</h4>
                        <p>And everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
                        <h5>But nothing the copy</h5>
                        <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, <code>made her drunk</code> with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again.</p>
                        <p>And if she hasn’t been rewritten, then they are still using her.</p>
                        <blockquote>
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.<cite>Sam witchky</cite></p>
                        </blockquote>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
                        <h6>when Gregor Samsa woke</h6>
                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls</p>
                      </div><!-- .entry-content -->
                    </article><!-- .post -->

                  </div><!-- .site-entry -->
                </div><!-- .col-md-8 -->

                <!-- sidebar -->
                <div class="col-md-4">
                  <div class="site-sidebar">
                    <section class="widget widget_search">
                      <form class="search-form">
                        <div class="form-group">
                          <label for="search" class="sr-only">Search</label>
                          <input type="text" class="form-control search-field" placeholder="Search...">
                        </div><!-- .form-group -->
                        <button type="submit" class="btn btn-default search-submit"><i class="fa fa-search"></i></button>
                      </form><!-- .search-form -->
                    </section><!-- .widget_search -->

                    <section class="widget astrif_widget_about">
                      <h2 class="widget-title"><span>About</span></h2>
                      <div class="about-author-container">
                        <div class="author-avatar">
                          <img src="assets/img/astrif-about.jpg" alt="astrif fifth">
                        </div>
                        <div class="author-info">
                          <p>Hi, glad to know you were here. I'm Astrif, newbie food blogger. I like to go anywhere to hunting some food and share with other. About taste, benefit, and where you can findout a good place to eat.</p>
                        </div>
                        <div class="author-signature" style="background-image: url('assets/img/astrif-signature.png');"></div>
                      </div><!-- .about-author-container -->
                    </section><!-- .astrif_widget_about -->

                    <section class="widget astrif_widget_follow_me">
                      <h2 class="widget-title"><span>Follow me</span></h2>
                      <div class="follow-me">
                        <ul class="social-icon social-icon-color">
                          <li><a href="" class="icon-twitter"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="" class="icon-facebook"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="" class="icon-instagram"><i class="fa fa-instagram"></i></a></li>
                          <li><a href="" class="icon-pinterest"><i class="fa fa-pinterest"></i></a></li>
                          <li><a href="" class="icon-youtube"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                      </div><!-- .follow-me -->
                    </section><!-- .astrif_widget_follow_me -->

                    <section class="widget astrif_widget_popular_entries">
                      <h2 class="widget-title"><span>Popular Posts</span></h2>
                      <ul>
                        <li>
                          <a href="single.blade.php" class="popular-entry-thumbnail">
                            <img src="assets/img/astrif-popular-01.jpg" alt="10 Easy Breakfast that can try in home">
                          </a>
                          <span class="popular-entry-title">
                            <a href="single.blade.php" rel="bookmark" class="popular-entry-title-link">10 Easy Breakfast that can try in home</a>
                            <span class="popular-entry-date">August 17, 2016</span>
                          </span>
                        </li>
                        <li>
                          <a href="single.blade.php" class="popular-entry-thumbnail">
                            <img src="assets/img/astrif-popular-02.jpg" alt="My Daily healthy food">
                          </a>
                          <span class="popular-entry-title">
                            <a href="single.blade.php" rel="bookmark" class="popular-entry-title-link">My Daily healthy food</a>
                            <span class="popular-entry-date">July 23, 2016</span>
                          </span>
                        </li>
                        <li>
                          <a href="single.blade.php" class="popular-entry-thumbnail">
                            <img src="assets/img/astrif-popular-04.jpg" alt="This pancake as sweet as you">
                          </a>
                          <span class="popular-entry-title">
                            <a href="single.blade.php" rel="bookmark" class="popular-entry-title-link">This pancake as sweet as you :')</a>
                            <span class="popular-entry-date">January 27, 2016</span>
                          </span>
                        </li>
                      </ul>
                    </section><!-- .astrif_widget_popular_entries -->

                    <section class="widget widget_categories">
                      <h2 class="widget-title"><span>Categories</span></h2>
                      <ul>
                        <li><a href="category.blade.php">Appetizer</a></li>
                        <li><a href="category.blade.php">Cook</a></li>
                        <li><a href="category.blade.php">Dessert</a></li>
                        <li><a href="category.blade.php">Food</a></li>
                        <li><a href="category.blade.php">Healthy</a></li>
                        <li><a href="category.blade.php">Tips</a></li>
                      </ul>
                    </section><!-- .widget_categories -->

                    <section class="widget widget_tag_cloud">
                      <h2 class="widget-title"><span>Tags</span></h2>
                      <div class="tagcloud">
                        <a href="#">food <span>52</span></a> <a href="#">dessert <span>86</span></a>
                        <a href="#">thoughts <span>13</span></a> <a href="#">inspiring <span>7</span></a>
                        <a href="#">tips <span>64</span></a> <a href="#">cook <span>9</span></a> <a href="#">healthy <span>29</span></a>
                      </div>
                    </section><!-- .widget_tag_cloud -->
                  </div><!-- .site-sidebar -->
                </div><!-- .col-md-4 -->
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->
@endsection