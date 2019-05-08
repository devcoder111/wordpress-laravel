@extends('bare')
@section('header')
<h2>Contact Us /</h2>
@stop

@section('content')
    <!-- begin:contact -->
    <section id="contact">
      <div class="container">
          <div class="row contact">
            <div class="col-md-3 col-sm-3">
              <div class="contact-content">
                <h3>Office Address</h3>
                <address>
                  <strong>AvriqqLabs, Inc.</strong><br>
                  231 Yogyakarta, INA 55791<br>
                  mail@domain.com<br>
                  http://www.domain.com <br>
                  <abbr title="Phone">Telp.</abbr> (0274) 441-5000
                </address>
              </div>
            </div>
            <div class="col-md-9 col-sm-9">
              <h3>Send Message</h3>
              <p>If you wanna like to contact me, please fill the form bellow.</p>

              <form class="comment-form">
                <div class="row">
                  <div class="col-md-6 col-sm-6">

                    <input type="text" class="form-control" placeholder="Enter Your Name : ">
                    <input type="email" class="form-control" placeholder="Enter Your Email : ">
                    <input type="text" class="form-control" placeholder="Enter Your Subject : ">
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <textarea class="form-control" rows="4" placeholder="Type Your Message : "></textarea>
                    <input type="submit" class="btn btn-info btn-lg btn-block">
                  </div>
                </div>
              </form>

            </div>
          </div>
      </div>
    </section>
@stop