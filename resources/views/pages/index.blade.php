@extends('layouts.app')

@section('content')
    <section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url(images/bg_1.jpg);   background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
			<div class="overlay js-fullheight"></div>
			<a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=nQWFzMvCfLE',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:false, startAt:0, opacity:1, quality:'default'}"></a>
			<div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">The <strong>Faith</strong> that overcomes the world</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary btn-outline-white px-4 py-3">Join Us Now</a></p>
          </div>
        </div>
      </div>
		</section>

		<section class="ftco-bible-study">
			<div class="container-wrap">
				<div class="col-md-12 wrap">
					<div class="container">
						<div class="row">
							<div class="col-md-12 d-md-flex">
								<div class="one-forth ftco-animate">
									<h3>Bible Study</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
								</div>
								<div class="one-half d-md-flex align-items-md-center ftco-animate">
									<div class="countdown-wrap">
										<p class="countdown d-flex">
											<span id="days"></span>
											<span id="hours"></span>
											<span id="minutes"></span>
											<span id="seconds"></span>
										</p>
									</div>
									<div class="button">
										<p><a href="#" class="btn btn-primary p-3">Events Details</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section-2">
      <div class="container-fluid">
        <div class="section-2-blocks-wrapper d-flex row no-gutters">
          <div class="img col-md-6 ftco-animate" style="background-image: url({{ asset ('images/about.png') }})">
            <a href="https://vimeo.com/45830194" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
          </div>
          <div class="text col-md-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Loving God, Loving Others and Serving the World</h3>
              <p>This has always been a channel through which we have seen the manifestation of the holy spirit..</p>

              <p>Not forsaking the assembling of ourselves together, as the manner of some is..." Heb 10:25. We hold weekly fellowship meetings, quarterly Zone meetings and bi-annual general conferences. This has always been a channel through which we have seen the manifestation of the holy spirit..</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <span class="subheading">Our Services</span>
            <h2 class="mb-4"> VFi Vision </h2>
            <p> We work hand in hand with local churches and fellowships. Our goal is to see the small churches grow by helping them get established.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-planet-earth"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">I'm New Here</h3>
                <p>We are excited to have new members on our board as the bible says christ is for all.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-maternity"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Partner Ministries</h3>
                <p>We partner with other Ministries so as to work together for the glory of our Lord Jesus Christ .</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-pray"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Prayer Request</h3>
                <p>We would love to pray with you send your prayer request, you can subcribe to our Newsletter .</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-podcast"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Podcasts</h3>
                <p>Listen to our sermons as they are streamed live through Podcasts or other social media</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Subscribe to our Newsletter to get personalised Information or any event happening in VFi Nairobi</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6">
                  <form action="#" class="subscribe-form">
                    <div class="form-group">
                      <span class="icon icon-paper-plane"></span>
                      <input type="text" class="form-control" placeholder="Enter email address">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Sermons</span>
            <h2 class="mb-4">Watch our sermons</h2>
            <p>Watch our spirit filled sermons from different leaders and members of Vfi</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('images/sermons-1.png') }})">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Be at Peace With One Another</a></h3>
        				<span class="position">Pastor. George</span>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('images/sermons-2.png') }})">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Inspirational Message of God</a></h3>
        				<span class="position">Pastor. Raynold</span>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('images/sermons-3.png') }})">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Prayers, Presence, and Provision</a></h3>
        				<span class="position">Erick Kwete Minga</span>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="row mt-5">
        	<div class="col text-center">
        		<p><a href="#" class="btn btn-primary btn-outline-primary p-3">Watch all sermons</a></p>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Read, Get Inspired, and Share Your Story</span>
            <h2 class="mb-4">Testimonies</h2>
            <p>There has to be a test for the testimony to be there below are some of the testimonies from VFi Nairobi</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url( {{ asset('images/test-1.png') }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Consolata</p>
                    <span class="position">Member</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset ('images/test-2.png') }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Anonymous</p>
                    <span class="position">Volunteer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset ('images/test-3.png') }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Anonymous</p>
                    <span class="position">member</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset('images/test-4.png') }}">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Anonymous</p>
                    <span class="position">member</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset('images/test-5.png') }}">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Anonymous</p>
                    <span class="position">member</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-counter" id="section-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>VFi Vision </h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="100">0</strong>
                <span>VFi fellowships around the world</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="420000">0</strong>
                <span>VFi Members around the globe</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8600000">0</strong>
                <span>Reaching &amp; Winining Souls</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-2 bg-light">
    	<div class="container-fluid">
    		<div class="row no-gutters d-flex">
    			<div class="col-md-6 img d-flex justify-content-end align-items-center" style="background-image: url({{('images/event.jpg')}})">
    				<div class="col-md-7 heading-section text-sm-center text-md-right heading-section-white ftco-animate mr-md-5 mt-md-5">
	            <h2>Our latest events</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
	            <p><a href="{{ url('/events') }}" class="btn btn-primary py-3 px-4">View Events</a></p>
	          </div>
    			</div>

    			<div class="col-md-6">
    				<div class="event-wrap">  
            @foreach($events as $event)
	    				<div class="event-entry d-flex ftco-animate">
	    					<div class="meta mr-4">
	    						<p>
	    							<span>07</span>
	    							<span>{{ date('M d, Y', strtotime($event->created_at)) }}</span>
	    						</p>
	    					</div>
	    					<div class="text">
	    						<h3 class="mb-2"><a href="events.html">Sunday's Bible Reading</a></h3>
	    						<p class="mb-4"><span>4:00pm at VFi Nairobi</span></p>
	    						<a href="{{ url('event/' . $event->slug) }}" class="img" style="background-image: url({{ $event->thumbnail }})"></a>
	    					</div>
	    				</div>
              @endforeach
    				</div>
    			</div>
    		</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
            <p>Awesome inspirations from individuals from VFi Nairobi and how they are impacted through word and fellowshiping together.</p>
          </div>
        </div>
        <div class="row">
        @foreach($posts as $post)
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="{{ url('post/' . $post->slug) }}" class="block-20" style="background-image: url({{ $post->thumbnail }})">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#"> on {{ date('M d, Y', strtotime($post->created_at)) }}</a></div>
                  <div><a href="#">{{ $post->user->name }}</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="{{ url('post/' . $post->slug) }}"> {{ $post->title }} </a></h3>
             
                @if(count($post->categories) > 0)
                                 <span class="post-category">
                      
                                    @foreach($post->categories as $category)
                                        <a href="{{ url('category/' . $category->slug) }}">{{ $category->name }}</a>,
                                    @endforeach
                        </span>
                            @endif
                </div>
               
              </div>
            </div>
          @endforeach
        </div>
    </section>
@endsection


