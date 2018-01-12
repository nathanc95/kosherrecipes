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
                    <img src="{{asset('img/astrif-about.jpg')}}" alt="astrif fifth">
                </div>
                <div class="author-info">
                    <p>Hi, glad to know you were here. I'm Astrif, newbie food blogger. I like to go anywhere to hunting some food and share with other. About taste, benefit, and where you can findout a good place to eat.</p>
                </div>
                <div class="author-signature" style="background-image: url('{{asset('')}}/img/astrif-signature.png');"></div>
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
                    <a href="/single" class="popular-entry-thumbnail">
                        <img src="{{asset('img/astrif-popular-01.jpg')}}" alt="10 Easy Breakfast that can try in home">
                    </a>
                    <span class="popular-entry-title">
                            <a href="/single" rel="bookmark" class="popular-entry-title-link">10 Easy Breakfast that can try in home</a>
                            <span class="popular-entry-date">August 17, 2016</span>
                          </span>
                </li>
                <li>
                    <a href="/single" class="popular-entry-thumbnail">
                        <img src="{{asset('img/astrif-popular-02.jpg')}}" alt="My Daily healthy food">
                    </a>
                    <span class="popular-entry-title">
                            <a href="/single" rel="bookmark" class="popular-entry-title-link">My Daily healthy food</a>
                            <span class="popular-entry-date">July 23, 2016</span>
                          </span>
                </li>
                <li>
                    <a href="/single" class="popular-entry-thumbnail">
                        <img src="{{asset('img/astrif-popular-03.jpg')}}" alt="Not drink a coke is good">
                    </a>
                    <span class="popular-entry-title">
                            <a href="/single" rel="bookmark" class="popular-entry-title-link">Not drink a coke is better, i think</a>
                            <span class="popular-entry-date">May 8, 2016</span>
                          </span>
                </li>
                <li>
                    <a href="/single" class="popular-entry-thumbnail">
                        <img src="{{asset('img/astrif-popular-04.jpg')}}" alt="This pancake as sweet as you">
                    </a>
                    <span class="popular-entry-title">
                            <a href="/single" rel="bookmark" class="popular-entry-title-link">This pancake as sweet as you :')</a>
                            <span class="popular-entry-date">January 27, 2016</span>
                          </span>
                </li>
                <li>
                    <a href="/single" class="popular-entry-thumbnail">
                        <img src="{{asset('img/astrif-popular-05.jpg')}}" alt="My daily drink in the morn">
                    </a>
                    <span class="popular-entry-title">
                            <a href="/single" rel="bookmark" class="popular-entry-title-link">My daily drink in the morn</a>
                            <span class="popular-entry-date">March 11, 2015</span>
                          </span>
                </li>
            </ul>
        </section><!-- .astrif_widget_popular_entries -->

        <section class="widget widget_text">
            <h2 class="widget-title"><span>Advertisement</span></h2>
            <div class="textwidget">
                <a href="/home"><img src="{{asset('img/astrif-sidebar-banner.jpg')}}" alt="buy astrif now"></a>
            </div>
        </section><!-- .astrif_widget_text -->

        <section class="widget widget_recent_entries">
            <h2 class="widget-title"><span>Recent Posts</span></h2>
            <ul>
                <li>
                    <a href="/single">Best beef burger in this city, I had met</a>
                    <span class="post-date">August 14, 2016</span>
                </li>
                <li>
                    <a href="/single">Fruit salad made from Black Autumn Royal grapes</a>
                    <span class="post-date">September 25, 2016</span>
                </li>
                <li>
                    <a href="/single">How to make nasi goreng seafood pedas</a>
                    <span class="post-date">June 16, 2016</span>
                </li>
                <li>
                    <a href="/single">All you need is gelato, yeey!</a>
                    <span class="post-date">May 8, 2016</span>
                </li>
                <li>
                    <a href="/single">Healthy breakfast for cute girl</a>
                    <span class="post-date">April 27, 2016</span>
                </li>
            </ul>
        </section><!-- .widget_recent_entries -->

        <section class="widget widget_categories">
            <h2 class="widget-title"><span>Categories</span></h2>
            <ul>
                <li><a href="/category">Appetizer</a></li>
                <li><a href="/category">Cook</a></li>
                <li><a href="/category">Dessert</a></li>
                <li><a href="/category">Food</a></li>
                <li><a href="/category">Healthy</a></li>
                <li><a href="/category">Tips</a></li>
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