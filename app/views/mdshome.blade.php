@extends('layout')
@section('feature')
<div class="featured-img featured-img-avatar" style="background: url(img/img06.jpg);">
    <h3><a href="/mds" target=_blank">Take the Maths Diagnostic Test Now</a></h3>
</div>
@stop
@section('header')
<h2>Project 4 - Math Diagnostic System</h2>
<p>Know your strengths and weaknesses</p>
@stop
@section('content')
                <div class="heading-title">
                    <h2>Math Diagnostic System</h2>
                </div>
                <p>The Math Diagnostic System is designed to test 20 different areas of Mathematical concepts that are
                covered in K-12. Unlike many standard tests, you cannot prepare for this test. At the end of the test,
                we will be able to tell you where your Mathematical strengths lie and where your weaknesses are.</p>
                <p>We will also be able to give you a breakdown of where you stand in each branch of Math amongst your
                cobort.</p>
                <p>This testing methodology is accurate, thorough and also fast.  It can only be achieved through electronic
                testing.</p>
				<p>There are over <?php echo $number_of_questions; ?> questions on this system!</p>
@stop
