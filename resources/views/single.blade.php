@extends('layouts.app')
@section('content')


      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

            <div class="container">
              <div class="row">
                <!-- article -->
                <div class="col-md-8 col-md-offset-2">
                  <div class="site-entry">
              
@include('single.article')

@include('single.navigation')

@include('single.author')

@include('single.related_post')

@include('single.comments')
                  </div><!-- .site-entry -->
                </div><!-- .col-md-8 -->
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->

 @endsection