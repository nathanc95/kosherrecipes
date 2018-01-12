@extends('layouts.app')
@section('content')

    <!-- content -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <div class="container">
                    <div class="row">
                        <!-- article -->
                        <div class="col-md-8">
                            <div class="site-entry">
                                @include('home.article')

                                <nav class="navigation posts-navigation" role="navigation">
                                    <h2 class="screen-reader-text">Posts navigation</h2>
                                    <div class="nav-links">
                                        <div class="nav-previous"><a href="#">Older posts</a></div>
                                        <div class="nav-next"><a href="#">Newer posts</a></div>
                                    </div>
                                </nav> <!-- .navigation -->
                            </div>
                        </div><!-- .col-md-8 -->

                    @include('layouts.sidebar')
                    </div><!-- .row -->
                </div><!-- .container -->

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- #content -->
       @endsection