@extends('layouts.app')
@section('content')
    <section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url(images/bg_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
			<div class="overlay js-fullheight"></div>
			<div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Sermons</span></p>
            <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Sermons</h1>
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

		<section class="ftco-section">
      <div class="container">
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url(images/sermons-1.jpg);">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Be at Peace With One Another</a></h3>
        				<span class="position">Pastor. Joseph Meyer</span>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url(images/sermons-2.jpg);">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Inspirational Message of God</a></h3>
        				<span class="position">Pastor. Joseph Meyer</span>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url(images/sermons-3.jpg);">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Prayers, Presence, and Provision</a></h3>
        				<span class="position">Dave Zuleger</span>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url(images/sermons-4.jpg);">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Be at Peace With One Another</a></h3>
        				<span class="position">Pastor. Joseph Meyer</span>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url(images/sermons-5.jpg);">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Inspirational Message of God</a></h3>
        				<span class="position">Pastor. Joseph Meyer</span>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="sermons">
        			<a href="https://vimeo.com/45830194" class="img popup-vimeo mb-3 d-flex justify-content-center align-items-center" style="background-image: url(images/sermons-6.jpg);">
        				<div class="icon d-flex justify-content-center align-items-center">
        					<span class="icon-play"></span>
        				</div>
        			</a>
        			<div class="text">
        				<h3><a href="#">Prayers, Presence, and Provision</a></h3>
        				<span class="position">Dave Zuleger</span>
        				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection