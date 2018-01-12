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
                    <header class="page-header">
                      <h1 class="page-title"><span>Browsing Category</span> Food</h1>
                      <div class="taxonomy-description">
                        <p>Just eat healthy food from now</p>
                      </div>
                    </header>
                    <div class="row container-masonry category">
                      <div class="col-sm-6">
                  @include('category.article')
                      </div><!-- .col-sm-6 -->

                    </div><!-- .row -->

                  @include('category.navigation')
                  </div>
                </div><!-- .col-md-9 -->

               @include('layouts.sidebar')
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->
      @endsection

