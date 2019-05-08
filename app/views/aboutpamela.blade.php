@extends('layout')
@section('feature')
<div class="featured-img featured-img-avatar" style="background: url(img/img00.jpg);">
    <h3>Pamela Lim - Mother | Educator | Entrepreneur</h3>
</div>
@stop
@section('header')
<h2>Project 1 - Portfolio Page</h2>
@stop
@section('content')
<h2>Pamela Lim</h2>
<p>My name is Pamela Lim, and I was an award-winning and well-known entrepreneur in Asia in the late 1990s and early 2000s who became a university lecturer for the last decade. Over the next five years, I will focus my research on Education.</p>
<p>I decided to take a course on Web Applications knowing that there will be a final project, and I'd like to take that opportunity to build a web application to do an adaptive Math testing system. I hope to get good advice and insights from experienced programmers and do at least a prototype during the course.</p>
<p>My experience in programming is varied. I started my career as a programmer in 1990 with Citibank, designing and programming ATMs. We used PL1, COBOL, Assembler in those days.</p>
<p>I subsequently moved on to become a business woman, and employed hundreds of programmers in seven countries. We were early adopters of the object oriented technology in mid-1990s. After which, I obtained a Nasdaq-listing approval and sold the company, then retired into a university to teach entrepreneurship so that I could raise my five children. Four out of five of my children were early entrants to universities and three are now post-graduate students.</p>
<p>Over the last few years, I have engaged a few programmers to do work for me. Have been quite disappointed, so I picked up programming myself to fill that gap. I've picked up C sharp, used the MVC stuff in Visual Studio, learned Java, learned Javascript and found out how HTML/CSS work. I have also taken courses in cloud computing. I hope to get up to speed on programming just to implement some systems. I find that it is much faster to code than to explain and ask people to code. I have also explored CMS like Moodle, Drupal and Joomla, and wrote some simple extensions. All self-taught.</p>
<p>I like working on Linux, but it sounds like this is not a preferred platform in the class, so I am going to stick to Windows. I like Linux's speed and its flexibility, but I am flexible. Happy to learn anything!</p>
@stop
@section('partner')
<!-- begin:featured -->
<div id="featured">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="featured-container">
                    <div class="featured-img" style="background: url(img/img00.jpg);">
                        <h3><a href="/aboutpamela">Portfolio</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="featured-container">
                    <div class="featured-img" style="background: url(img/img04.jpg);">
                        <h3><a href="project2.html">XKCD Password</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="featured-container">
                    <div class="featured-img" style="background: url(img/img05.jpg);">
                        <h3><a href="project3.html">Developer's Best Friend</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="featured-container">
                    <div class="featured-img" style="background: url(img/img03.jpg);">
                        <h3><a href="/mdshome">Math Diagnostic Test</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:featured -->

@stop
