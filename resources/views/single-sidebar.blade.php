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
                          <li class="menu-item current-menu-item"><a href="single-sidebar.blade.php">Single Post With Sidebar</a></li>
                          <li class="menu-item"><a href="page-fullwidth.blade.php">Page Full Width</a></li>
                          <li class="menu-item"><a href="page-sidebar.blade.php">Page With Sidebar</a></li>
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
                        <h1 class="entry-title">How to Make Mak-Nyuss Baked Potatoes Stick Recipes From Deanda</h1>
                        <div class="entry-meta">
                          <span class="posted-on">
                            on <a href="single.blade.php" rel="bookmark"> <time class="entry-date" datetime="2016-09-07">Sept 07, 2016</time> </a>
                          </span><!-- .posted-on -->
                          <span class="entry-comment">
                            with <span class="comment-link"><a href="#comments">4 Comments</a></span>
                          </span><!-- .entry-cat -->
                          <span class="entry-cat">
                            in <span class="cat-link"><a href="category.blade.php">Tips</a></span>
                          </span><!-- .entry-cat -->
                          <span class="entry-like"><a href=""><i class="fa fa-heart-o"></i> 42</a></span>
                        </div><!-- .entry-meta -->
                      </div><!-- .entry-header -->

                      <div class="entry-featured-image">
                        <img src="assets/img/astrif-post-entry-01.jpg" alt="How to Make Mak-Nyuss Baked Potatoes Stick Recipes From Deanda">
                      </div><!-- .entry-featured-image -->
                      
                      <div class="entry-content">
                        <p>Far far away, behind the word mountains, far from the countries <a href="#" class="text-link">Vokalia and Consonantia</a>, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
                        <h2>She packed her seven versalia</h2>
                        <p>She packed her seven versalia, put her initial <em>into the belt and made herself</em> on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                        <p>Pityful a rethoric question ran over her cheek, then <strong>she continued</strong> her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times.</p>
                        <p>And everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
                        <h3>But nothing the copy</h3>
                        <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, <code>made her drunk</code> with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again.</p>
                        <p>And if she hasn’t been rewritten, then they are still using her.</p>
                        <blockquote>
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.<cite>Sam witchky</cite></p>
                        </blockquote>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <h4>It is a paradisematic country</h4>
                        <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day.</p>
                        <p>However a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        <h5>The Big Oxmox advised her</h5>
                        <p>The Big Oxmox advised her not to do so, because <a href="#" class="text-link">there were</a> thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
                        <p><img src="assets/img/astrif-popular-01.jpg" class="alignleft" alt="left align image">She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer.</p>
                        <p><img src="assets/img/astrif-popular-02.jpg" class="alignright" alt="right align image">Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. "How about if I sleep a little bit longer and forget all this nonsense", he thought, but that was something he was unable to do because he was used to sleeping on his right, and in his present state couldn't get into that position. However hard he threw himself onto his right, he always rolled back to where he was. He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before. "Oh, God", he thought, "what a strenuous career it is that I've chosen! Travelling day in and day out. Doing business like this takes much more effort than doing your own business at home, and on top of that there's the curse of travelling, worries about making train connections, bad and irregular food, contact with different people all the time so that you can never get to know anyone or become friendly with them. It can all go to Hell!" He felt a slight itch up on his belly; pushed himself slowly up on his back towards the headboard so that he could lift his head better; found where the itch was, and saw that it was covered with lots of little white spots which he didn't know what to make of; and when he tried to feel the place with one of his legs he drew it quickly back because as soon as he touched it he was overcome by a cold shudder. He slid back into his former position. "Getting up early all the time", he thought, "it makes you stupid.</p>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                        <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees</p>
                        <figure class="wp-caption aligncenter">
                          <img class="size-full aligncenter" alt="Image Alignment center with caption" src="assets/img/astrif-post-entry-single-01.jpg">
                          <figcaption class="wp-caption-text">Look at this getting some <a title="Image Settings" href="#">caption</a> love.</figcaption>
                        </figure>
                        <p>And but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks</p>
                        <p>And grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty who formed us in his own image, and the breath of that universal love which bears and sustains us, as it floats around us in an eternity of bliss;</p>
                        <p>And then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power</p>
                        <p><img src="assets/img/astrif-post-entry-single-02.jpg" class="aligncenter" alt="align center image"></p>
                        <p>Like the form of a beloved mistress, then I often think with longing, Oh, would I could describe these conceptions</p>
                        <p>could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!</p>
                        <p>O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
                      </div><!-- .entry-content -->

                      <footer class="entry-footer">
                        <span class="tags-links">
                          <a href="#">recipes</a> <a href="#">cook</a> <a href="#">food</a> <a href="#">appetizer</a>
                        </span><!-- .tags-links -->
                        <span class="share-links">
                          <span>Share this</span>
                          <a href="" class="icon-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                          <a href="" class="icon-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                          <a href="" class="icon-google-plus"><i class="fa fa-google-plus"></i> Google+</a>
                          <a href="" class="icon-pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
                          <a href="" class="icon-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>
                        </span><!-- .share-links -->
                      </footer><!-- .entry-footer -->
                    </article><!-- .post -->

                    <nav class="navigation post-navigation" role="navigation">
                      <h2 class="screen-reader-text">Post navigation</h2>
                      <div class="nav-links">
                        <div class="nav-previous">
                          <a href="#" class="image-link"><img src="assets/img/astrif-post-entry-02.jpg"></a>
                          <span>Previous Post</span>
                          <a href="#" class="prev-link" rel="prev">Healthy Breakfast For Cute Girl</a>
                        </div>
                        <div class="nav-next">
                          <a href="#" class="image-link"><img src="assets/img/astrif-post-entry-07.jpg"></a>
                          <span>Next Post</span>
                          <a href="#" class="next-link" rel="next">Gelato in 'omah gelato' will punch you hard!</a>
                        </div>
                      </div>
                    </nav><!-- .navigation -->

                    <!-- author bio -->
                    <div class="section-title">
                      <h3>Written by</h3>
                    </div>
                    <div class="entry-author-bio">
                      <div class="author-bio-avatar">
                        <img alt="author bio" src="assets/img/astrif-about.jpg" class="avatar">
                      </div><!-- .author-bio-avatar -->
                      <div class="author-bio-description">
                        <h4>astri fajria</h4>
                        <p>Young girl who love meet people to talk each other. Nerd. Has ability to make people fascinated. My passion in fashion and making a good personality bring happiness to a lot of people.</p>
                        
                        <ul class="social-icon">
                          <li><a href="#" class="icon-facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#" class="icon-twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#" class="icon-instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                          <li><a href="#" class="icon-youtube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                          <li><a href="#" class="icon-pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                      </div><!-- .author-bio-description -->
                    </div><!-- entry-author-bio -->

                    <div class="related-posts">
                      <div class="section-title">
                        <h3>You May Also Like</h3>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="post-container">
                            <div class="post-thumbnail">
                              <a href="#"><img src="assets/img/astrif-post-entry-02.jpg"></a>
                            </div><!-- .post-thumbnail -->
                            <h3 class="post-title"><a href="#">What I Wore Today</a></h3>
                            <span class="post-meta"><a href="#">Okt 09, 2016</a></span>
                          </div><!-- .post-container -->
                        </div><!-- .col-md-3 -->
                        <div class="col-sm-4">
                          <div class="post-container">
                            <div class="post-thumbnail">
                              <a href="#"><img src="assets/img/astrif-post-entry-04.jpg"></a>
                            </div><!-- .post-thumbnail -->
                            <h3 class="post-title"><a href="#">10 comfy swimsuit in this month</a></h3>
                            <span class="post-meta"><a href="#">Aug 14, 2016</a></span>
                          </div><!-- .post-container -->
                        </div><!-- .col-md-3 -->
                        <div class="col-sm-4">
                          <div class="post-container">
                            <div class="post-thumbnail">
                              <a href="#"><img src="assets/img/astrif-post-entry-05.jpg"></a>
                            </div><!-- .post-thumbnail -->
                            <h3 class="post-title"><a href="#">7 sweet hat for hangout that you should know</a></h3>
                            <span class="post-meta"><a href="#">Aug 02, 2016</a></span>
                          </div><!-- .post-container -->
                        </div><!-- .col-md-3 -->
                      </div><!-- .row -->
                    </div><!-- .related-posts -->

                    <div id="comments" class="comments-area">
                      <div class="section-title">
                        <h3>4 Comments</h3>
                      </div>

                      <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                        <h2 class="screen-reader-text">Comment navigation</h2>
                        <div class="nav-links">
                          <div class="nav-previous">
                            <a href="#comments">Older Comments</a>
                          </div>
                          <div class="nav-next">
                            <a href="#comments">Newer Comments</a>
                          </div>
                        </div><!-- .nav-links -->
                      </nav><!-- #comment-nav-above -->
                        
                      <ol class="comment-list">
                        <li class="comment even parent">
                          <article class="comment-body">
                            <footer class="comment-meta">
                              <div class="comment-author vcard">
                                <img alt="" src="assets/img/astrif-comment-author-01.jpg" class="avatar">
                                <span class="fn">Jessica</span>
                              </div><!-- .comment-author -->

                              <div class="comment-metadata">
                                <a href="#">
                                  <time datetime="2016-05-09T00:51:13+00:00"> May 9, 2016 at 11:21 am </time>
                                </a>
                              </div><!-- .comment-metadata -->
                            </footer><!-- .comment-meta -->

                            <div class="comment-content">
                              <p>Nowadays, a family is simply a network of people who care for each other. It can contain hundreds or two. You can be born into one or build your own.</p>
                            </div><!-- .comment-content -->

                            <div class="reply">
                              <a rel="nofollow" class="comment-reply-link" href="#respond">Reply</a>
                            </div>      
                          </article><!-- .comment-body -->

                          <ol class="children">
                            <li class="comment even parent">
                              <article class="comment-body">
                                <footer class="comment-meta">
                                  <div class="comment-author vcard">
                                    <img alt="" src="assets/img/astrif-comment-author-02.jpg" class="avatar">
                                    <span class="fn">Jane Doe</span>
                                  </div><!-- .comment-author -->

                                  <div class="comment-metadata">
                                    <a href="#">
                                      <time datetime="2016-05-09T00:51:13+00:00"> May 9, 2016 at 12:51 am </time>
                                    </a>
                                  </div><!-- .comment-metadata -->
                                </footer><!-- .comment-meta -->

                                <div class="comment-content">
                                  <p>Nowadays, a family is simply a network of people who care for each other. It can contain hundreds or two. You can be born into one or build your own.</p>
                                </div><!-- .comment-content -->

                                <div class="reply">
                                  <a rel="nofollow" class="comment-reply-link" href="#respond">Reply</a>
                                </div>      
                              </article><!-- .comment-body -->

                              <ol class="children">
                                <li class="comment even parent">
                                  <article class="comment-body">
                                    <footer class="comment-meta">
                                      <div class="comment-author vcard">
                                        <img alt="" src="assets/img/astrif-comment-author-03.jpg" class="avatar">
                                        <span class="fn">Diana Brown</span>
                                      </div><!-- .comment-author -->

                                      <div class="comment-metadata">
                                        <a href="#">
                                          <time datetime="2016-05-09T00:51:13+00:00"> May 9, 2016 at 12:51 am </time>
                                        </a>
                                      </div><!-- .comment-metadata -->
                                    </footer><!-- .comment-meta -->

                                    <div class="comment-content">
                                      <p>Nowadays, a family is simply a network of people who care for each other. It can contain hundreds or two. You can be born into one or build your own.</p>
                                    </div><!-- .comment-content -->

                                    <div class="reply">
                                      <a rel="nofollow" class="comment-reply-link" href="#respond">Reply</a>
                                    </div>      
                                  </article><!-- .comment-body -->

                                  <ol class="children">
                                    <li class="comment even parent">
                                      <article class="comment-body">
                                        <footer class="comment-meta">
                                          <div class="comment-author vcard">
                                            <img alt="" src="assets/img/astrif-comment-author-04.jpg" class="avatar">
                                            <span class="fn">Briana Smith</span>
                                          </div><!-- .comment-author -->

                                          <div class="comment-metadata">
                                            <a href="#">
                                              <time datetime="2016-05-09T00:51:13+00:00"> May 9, 2016 at 12:51 am </time>
                                            </a>
                                          </div><!-- .comment-metadata -->
                                        </footer><!-- .comment-meta -->

                                        <div class="comment-content">
                                          <p>Nowadays, a family is simply a network of people who care for each other. It can contain hundreds or two. You can be born into one or build your own.</p>
                                        </div><!-- .comment-content -->

                                        <div class="reply">
                                          <a rel="nofollow" class="comment-reply-link" href="#respond">Reply</a>
                                        </div>      
                                      </article><!-- .comment-body -->
                                    </li>
                                  </ol>
                                </li>
                              </ol>
                            </li>
                          </ol>
                        </li>
                      </ol><!-- .comment-list -->

                      <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                        <h2 class="screen-reader-text">Comment navigation</h2>
                        <div class="nav-links">
                          <div class="nav-previous">
                            <a href="#comments">Older Comments</a>
                          </div>
                          <div class="nav-next">
                            <a href="#comments">Newer Comments</a>
                          </div>
                        </div><!-- .nav-links -->
                      </nav><!-- #comment-nav-below -->

                      <div id="respond" class="comment-respond">
                        <div class="section-title">
                          <h3>Leave a comment</h3>
                        </div>
                        <form class="form-horizontal comment-form">
                          <div class="form-group">
                            <div class="col-sm-12">
                              <label>Message</label>
                              <textarea class="form-control" rows="6"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-4">
                              <label>Name *</label>
                              <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4">
                              <label>Email *</label>
                              <input type="email" class="form-control">
                            </div>
                            <div class="col-sm-4">
                              <label>Website</label>
                              <input type="url" class="form-control">
                            </div>
                          </div>
                          <p class="form-submit">
                            <input name="submit" type="submit" class="btn btn-default" value="Submit">
                          </p>
                        </form>
                      </div><!-- .comment-respond -->
                    </div><!-- .comments-area -->
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
                            <img src="assets/img/astrif-popular-03.jpg" alt="Not drink a coke is good">
                          </a>
                          <span class="popular-entry-title">
                            <a href="single.blade.php" rel="bookmark" class="popular-entry-title-link">Not drink a coke is better, i think</a>
                            <span class="popular-entry-date">May 8, 2016</span>
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
                        <li>
                          <a href="single.blade.php" class="popular-entry-thumbnail">
                            <img src="assets/img/astrif-popular-05.jpg" alt="My daily drink in the morn">
                          </a>
                          <span class="popular-entry-title">
                            <a href="single.blade.php" rel="bookmark" class="popular-entry-title-link">My daily drink in the morn</a>
                            <span class="popular-entry-date">March 11, 2015</span>
                          </span>
                        </li>
                      </ul>
                    </section><!-- .astrif_widget_popular_entries -->

                    <section class="widget widget_text">
                      <h2 class="widget-title"><span>Advertisement</span></h2>
                      <div class="textwidget">
                        <a href="index.html"><img src="assets/img/astrif-sidebar-banner.jpg" alt="buy astrif now"></a>
                      </div>
                    </section><!-- .astrif_widget_text -->

                    <section class="widget widget_recent_entries">    
                      <h2 class="widget-title"><span>Recent Posts</span></h2>
                      <ul>
                        <li>
                          <a href="single.blade.php">Best beef burger in this city, I had met</a>
                          <span class="post-date">August 14, 2016</span>
                        </li>
                        <li>
                          <a href="single.blade.php">Fruit salad made from Black Autumn Royal grapes</a>
                          <span class="post-date">September 25, 2016</span>
                        </li>
                        <li>
                          <a href="single.blade.php">How to make nasi goreng seafood pedas</a>
                          <span class="post-date">June 16, 2016</span>
                        </li>
                        <li>
                          <a href="single.blade.php">All you need is gelato, yeey!</a>
                          <span class="post-date">May 8, 2016</span>
                        </li>
                        <li>
                          <a href="single.blade.php">Healthy breakfast for cute girl</a>
                          <span class="post-date">April 27, 2016</span>
                        </li>
                      </ul>
                    </section><!-- .widget_recent_entries -->

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