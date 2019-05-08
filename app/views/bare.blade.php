<!-- start: header ---------->
@include ('header')
<section id="header" class="heading" style="background: url(img/img03.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="title-desc">
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- end:header -->

<!-- begin:content -->
<section id="content">
    <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-8 col-sm-8">
                <div class="featured-container">
                    @yield('feature')
                </div>
                <br>
                 @yield('content')
            </div>
            <!-- end:article -->
        </div>
    </div>
</section>
<!-- end:content -->

<!-- begin:partner -->
<section id="partner">
    @yield('partner')
</section>
<!-- end:partner -->

@include('footer')