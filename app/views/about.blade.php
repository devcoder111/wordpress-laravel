@extends('master')
@section('header')
<!-- begin:header -->
<section id="header" class="heading" style="background: url(img/img03.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="title-desc">
                    <h2>About this site</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- end:header -->
@stop
@section('content')
  <p>There are over {{$number_of_cats}} cats on this site!</p>
@stop


