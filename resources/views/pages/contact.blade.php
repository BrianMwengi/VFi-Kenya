@extends('layouts.app')

@section('content')
    <section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url(images/bg_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
			<div class="overlay js-fullheight"></div>
			<div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact</h1>
          </div>
        </div>
      </div>
		</section>

    
           
		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div>
        </div>
        
        @if(Session::has('message'))
        <div class="alert alert-success">
          {{Session('message')}}
          </div>
           @endif
       
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          {!! Form::open(['route' => 'contact.submit']) !!}
          <form action="" method="post">
              <div class="form-group">
                <input type="text"  name="name" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="text"   name="email" class="form-control" placeholder="Your Email"  required>
              </div>
              <div class="form-group">
                <input type="text"  name="subject" class="form-control" placeholder="Subject"  required>
              </div>
              <div class="form-group">
                <textarea name="" id=""  name="message" cols="30" rows="7" class="form-control" placeholder="Message" required
                  data-validation-required-message="Please enter your email address."></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" required>
              </div>
             
          
          </div>
          {!! Form::close() !!}
           
          <div class="col-md-6" id="map"></div>
        </div>
      </div>
    </section>
@endsection