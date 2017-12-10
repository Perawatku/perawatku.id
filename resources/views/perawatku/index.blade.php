<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perawatku</title>
    <!-- Bootstrap -->
    <link href="{{ url('/asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/css/homestyle.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/css/mobile.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/css/tablet.css') }}" rel="stylesheet">
    <!-- Slider -->
    <link href="{{ url('/asset/slider/css/rs-plugin/pi.settings.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/slider/css/slider.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/slider/css/images.css') }}" rel="stylesheet">
    <link href="{{ url('/asset/slider/css/fontello/fontello.css') }}" rel="stylesheet">

    <script src="{{ url('/asset/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ url('/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/asset/js/custom.js') }}"></script>
    <script src="{{ url('/asset/js/jquery.immersive-slider.js') }}"></script>

    <script src="{{ url('/asset/js/scrollreveal.min.js') }}"></script>
    <script src="{{ url('/asset/slider/js/pi.slider.js') }}"></script>
    <script src="{{ url('/asset/slider/js/pi.init.slider.js') }}"></script>
    <script src="{{ url('/asset/slider/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script src="{{ url('/asset/slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ url('/asset/slider/js/pi.init.revolutionSlider.js') }}"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
    svg {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  ms-transform: rotate(180deg); /* IE 9 */
      -webkit-transform: rotate(180deg); /* Safari */
      transform: rotate(180deg); /* Standard syntax */
      border-radius: 10px;
  }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-menu">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand"><img src="{{ url('/asset/images/logo.png') }}"></a>
          <button class="navbar-toggle" data-target="#navbar" data-toggle="collapse">
            <div class="iconx">
              <div class="hamburger"></div>
            </div>
          </button>
        </div>
        <div class="collapse navbar-collapse navbar-collapse-full" id="navbar">
          <ul class="nav navbar-nav navbar-right nav-overlay">
            <a href="#" class="nav-close" data-target="#navbar" data-toggle="collapse"> Close</a>
            <li><hr></li>
            <li class="li-nav" {{ request()->route()->getName() === 'perawatku.index' ? ' class=active' : '' }}><a href="{{route('index')}}" >HOME</a></li>
            <li class="li-nav" {{ request()->route()->getName() === 'perawatku.listrawat' ? ' class=active' : '' }}><a href="{{ url('/listrawat') }}">PERAWATKU</a></li>
            <li class="li-nav" ><a href="{{ url('/about') }}">ABOUT US</a></li>
            <li class="li-nav"><a href="{{ url('/faq') }}">FAQ</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="big-banner" class="big-banner">
      <div id="page">
      <div class="tp-banner pi-revolution-slider" >
      <ul class="">
        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" >
        <!-- MAIN IMAGE -->
        <img src="{{ url('/asset/images/background-banner.png') }}"  alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
        <!-- LAYERS -->
        <!-- LAYER NR. 1 -->
        <div class="tp-caption sfl fadeout"
           data-x="-100"
           data-y="90"
           data-speed="800"
           data-start="1500"
           data-easing="Power4.easeOut"
           data-endspeed="300"
           data-endeasing="Power1.easeIn"
           data-captionhidden="on"
           style="z-index: 3"><img src="{{ url('/asset/images/women.png') }}" alt="">
        </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption sfr fadeout"
           data-x="210"
           data-y="50"
           data-speed="800"
           data-start="1800"
           data-easing="Power4.easeOut"
           data-endspeed="300"
           data-endeasing="Power1.easeIn"
           data-captionhidden="on"
           style="z-index: 4"><img src="{{ url('/asset/images/men.png') }}" alt="">
        </div>
        <!-- LAYER NR. 1 -->
        <!-- LAYER NR. 4 -->
        <div class="tp-caption fade fadeout"
          data-x="700" data-hoffset="0"
          data-y="157"
        	 data-speed="500"
        	 data-start="2400"
        	 data-easing="Back.easeInOut"
        	 data-endspeed="300"
        	 data-endeasing="Power1.easeIn"
        	 data-captionhidden="on"
           style="z-index: 7; font-size: 34px; color: white; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; line-height: 40px; background: transparent; ">
        	 Perawatku
        </div>
        <div class="tp-caption sfl str"
        	 data-x="700" data-hoffset="0"
        	 data-y="236"
        	 data-speed="500"
        	 data-start="2600"
        	 data-easing="Back.easeInOut"
        	 data-endspeed="300"
        	 style="z-index: 7; font-size: 20px; color: white; font-weight: 300; line-height: 28px; background: transparent;">
        	 Dolore Magnam Aliquam Quaerat Voluptatem
        </div>

        </li>
        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" >
        <!-- MAIN IMAGE -->
        <img src="{{ url('/asset/images/background-banner.png') }}"  alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
        <!-- LAYERS -->
        <!-- LAYER NR. 1 -->
        <div class="tp-caption sfl fadeout"
           data-x="-100"
           data-y="90"
           data-speed="800"
           data-start="1500"
           data-easing="Power4.easeOut"
           data-endspeed="300"
           data-endeasing="Power1.easeIn"
           data-captionhidden="on"
           style="z-index: 3"><img src="{{ url('/asset/images/women.png') }}" alt="">
        </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption sfr fadeout"
           data-x="210"
           data-y="50"
           data-speed="800"
           data-start="1800"
           data-easing="Power4.easeOut"
           data-endspeed="300"
           data-endeasing="Power1.easeIn"
           data-captionhidden="on"
           style="z-index: 4"><img src="{{ url('/asset/images/men.png') }}" alt="">
        </div>
        <!-- LAYER NR. 1 -->
        <!-- LAYER NR. 4 -->
        <div class="tp-caption fade fadeout"
          data-x="700" data-hoffset="0"
          data-y="157"
        	 data-speed="500"
        	 data-start="2400"
        	 data-easing="Back.easeInOut"
        	 data-endspeed="300"
        	 data-endeasing="Power1.easeIn"
        	 data-captionhidden="on"
           style="z-index: 7; font-size: 34px; color: white; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; line-height: 40px; background: transparent; ">
        	 Perawatku
        </div>
        <div class="tp-caption sfl str"
        	 data-x="700" data-hoffset="0"
        	 data-y="236"
        	 data-speed="500"
        	 data-start="2600"
        	 data-easing="Back.easeInOut"
        	 data-endspeed="300"
        	 style="z-index: 7; font-size: 20px; color: white; font-weight: 300; line-height: 28px; background: transparent;">
        	 Dolore Magnam Aliquam Quaerat Voluptatem
        </div>

        </li>

      <!-- SLIDE  -->
      <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" >
      <!-- MAIN IMAGE -->
      <img src="{{ url('/asset/images/background-banner.png') }}"  alt=""  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
      <!-- LAYERS -->
      <!-- LAYER NR. 1 -->
      <div class="tp-caption sfl fadeout"
         data-x="-100"
         data-y="90"
         data-speed="800"
         data-start="1500"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         data-captionhidden="on"
         style="z-index: 3"><img src="{{ url('/asset/images/women.png') }}" alt="">
      </div>

      <!-- LAYER NR. 2 -->
      <div class="tp-caption sfr fadeout"
         data-x="210"
         data-y="50"
         data-speed="800"
         data-start="1800"
         data-easing="Power4.easeOut"
         data-endspeed="300"
         data-endeasing="Power1.easeIn"
         data-captionhidden="on"
         style="z-index: 4"><img src="{{ url('/asset/images/men.png') }}" alt="">
      </div>
      <!-- LAYER NR. 1 -->
      <!-- LAYER NR. 4 -->
      <div class="tp-caption fade fadeout"
        data-x="700" data-hoffset="0"
        data-y="157"
      	 data-speed="500"
      	 data-start="2400"
      	 data-easing="Back.easeInOut"
      	 data-endspeed="300"
      	 data-endeasing="Power1.easeIn"
      	 data-captionhidden="on"
         style="z-index: 7; font-size: 34px; color: white; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; line-height: 40px; background: transparent; ">
      	 Perawatku
      </div>
      <div class="tp-caption sfl str"
      	 data-x="700" data-hoffset="0"
      	 data-y="236"
      	 data-speed="500"
      	 data-start="2600"
      	 data-easing="Back.easeInOut"
      	 data-endspeed="300"
      	 style="z-index: 7; font-size: 20px; color: white; font-weight: 300; line-height: 28px; background: transparent;">
      	 Dolore Magnam Aliquam Quaerat Voluptatem
      </div>

      </li>

      </ul>
      </div>
      </div>

      <span class="revolution-slider"></span>

    </section>
    <div class="service-content">
      <div class="container">
        <h1 class="header-service">Anda memerlukan<br> pelayanan kesehatan</h1>
        <p class="tagline-service">Bagaimana perawatku.id membantu anda menemukan perawat anda</p>
    	</div>
    </div>

    <section class="timeline">
      <div class="container">
        <div class="timeline-item">
    			<div class="timeline-img"></div>
          <div class="timeline-content js--fadeInLeft">
    				<div class="row">
    					<table>
    						<tr>
    							<th class="col-md-8 text-right">
    								<div>
    									<h1 class="title-service">Cari Perawat</h1>
    									<p>Bootstrap ships with vanilla CSS, but its source CSSBootstrap ships with vanilla CSS, but its source code utilizes ?</p>
    								</div>
    							</th>
    							<th class="col-md-4">
    								<img src="{{ url('/asset/images/icon1.png') }}" class="img-responsive">
    							</th>
    						</tr>
    					</table>
    				</div>
          </div>
    		</div>
        <div class="timeline-item">
    			<div class="timeline-img"></div>
          <div class="timeline-content timeline-card js--fadeInRight">
    				<div class="row">
    					<table>
    						<tr>
    							<th class="col-md-8 text-right">
    								<div>
    									<h1 class="title-service">Cari Perawat</h1>
    									<p>Bootstrap ships with vanilla CSS, but its source CSSBootstrap ships with vanilla CSS, but its source code utilizes ?</p>
    								</div>
    							</th>
    							<th class="col-md-4">
    								<img src="{{ url('/asset/images/icon1.png') }}" class="img-responsive">
    							</th>
    						</tr>
    					</table>
    				</div>
          </div>
        </div>
        <div class="timeline-item">
    			<div class="timeline-img"></div>
          <div class="timeline-content js--fadeInLeft">
    				<div class="row">
    					<table>
    						<tr>
    							<th class="col-md-8 text-right">
    								<div>
    									<h1 class="title-service">Cari Perawat</h1>
    									<p>Bootstrap ships with vanilla CSS, but its source CSSBootstrap ships with vanilla CSS, but its source code utilizes ?</p>
    								</div>
    							</th>
    							<th class="col-md-4">
    								<img src="{{ url('/asset/images/icon1.png') }}" class="img-responsive">
    							</th>
    						</tr>
    					</table>
    				</div>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-img"></div>
          <div class="timeline-content timeline-card js--fadeInRight">
    				<div class="row">
    					<table>
    						<tr>
    							<th class="col-md-8 text-right">
    								<div>
    									<h1 class="title-service">Cari Perawat</h1>
    									<p>Bootstrap ships with vanilla CSS, but its source CSSBootstrap ships with vanilla CSS, but its source code utilizes ?</p>
    								</div>
    							</th>
    							<th class="col-md-4">
    								<img src="{{ url('/asset/images/icon1.png') }}" class="img-responsive">
    							</th>
    						</tr>
    					</table>
    				</div>
          </div>
        </div>
      </div>
    </section>
    <section id="" class="story">
      <div class="story-content">
        <div class="container col-sm-8 col-sm-offset-2">
          <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
              <div class="img-story">
                <img src="{{ url('/asset/images/logo-footer.png') }}">
              </div>
              <div class="caption-story">
                <p>Quickly get started with precompiled</p>
              </div>
              <div class="ceo-story">
                <h3 class="jab-story">CEO</h3>
                <h3 class="jab-story">CEO</h3>
                <h3 class="jab-story">CEO</h3>
                <h3 class="jab-story">CEO</h3>
                <h3 class="jab-story">CEO</h3>
                <p class="name-story">Ogy Winenriandhika</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="profile-img-story">
                <img src="{{ url('/asset/images/dokter3.png') }}">
              </div>
            </div>
          </div>|
        </div>
      </div>
    </section>

    <section id="" class="wework">
      <div class="wework-content">
        <div class="container">
          <div class="page_container">
            <div id="immersive_slider">
              <div class="slide" data-blurred="{{ url('/asset/images/back.png') }}">
                <div class="content">
                  <h2><a href="" target="_blank">Slider 1</a></h2>
                  <p>Konten Slider 1</p>
                </div>
                <div class="image">
                  <a href="" target="_blank">
                    <img src="{{ url('/asset/images/dokter.png') }}" alt="Slider 1">
                  </a>
                </div>
              </div>
              <div class="slide" data-blurred="{{ url('/asset/images/back.png') }}">
                <div class="content">
                  <h2><a href="" target="_blank">Slider 2</a></h2>
                  <p>Konten Slider 2.</p>
                </div>
                <div class="image">
                 <a href="" target="_blank"> <img src="{{ url('/asset/images/dokter.png') }}" alt="Slider 1"></a>
                </div>
              </div>
              <div class="slide" data-blurred="{{ url('/asset/images/back.png') }}">
                <div class="content">
                  <h2><a href="" target="_blank">Slider 3</a></h2>
                  <p>Konten Slider 3</p>
                </div>
                <div class="image">
                  <a href="" target="_blank"><img src="{{ url('/asset/images/dokter.png') }}" alt="Slider 1"></a>
                </div>
              </div>

              <a href="#" class="is-prev">&laquo;</a>
              <a href="#" class="is-next">&raquo;</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="" class="journey">
      <div class="journey-content">
        <div class="container col-sm-8 col-sm-offset-2">
          <div class="row">
            <h1>Journey</h1>
            <br><br>
            <table class="table-text-center">
              <tr>
                <td><p class="value-list">2</p></td>
                <td><p class="value-list">249</p></td>
                <td><p class="value-list">45</p></td>
                <td><p class="value-list">4</p></td>
              </tr>
              <tr>
                <th class="col-xs-3 col-sm-3"><h2>Hospital</h2></th>
                <th class="col-xs-3 col-sm-3"><h2>Nurse</h2></th>
                <th class="col-xs-3 col-sm-3"><h2>Medical Patience</h2></th>
                <th class="col-xs-3 col-sm-3"><h2>Stake Holder</h2></th>
              </tr>
            </table>
          </div>|
        </div>
      </div>
    </section>

    <section id="" class="collaboration">
      <div class="collaboration-content">
        <div class="container">
          <div class="">
            <h1>Collaboration</h1>
            <img class="img-collaboration" src="{{ url('/asset/images/Secondary-Logo-3-300x117.png') }}">
            <img class="img-collaboration" src="{{ url('/asset/images/1200px-Telkom_Indonesia_2013.svg-300x165.png') }}">
            <img class="img-collaboration" src="{{ url('/asset/images/proemergency-com_256-150x150.png') }}">
            <img class="img-collaboration" src="{{ url('/asset/images/logo_nextdevss_detail-300x77.png') }}">
            <img class="img-collaboration" src="{{ url('/asset/images/Untitjjed-1-300x155.png') }}">
          </div>
        </div>
      </div>
    </section>
    
    <section id="" class="subscribe">
      <div class="subscribe-content">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="form-subscribe">
                <h2>Perawatku.id is coming up to help the nurse<br>and people that needed help</h2>
                <form method="post" action="#">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your E-Mail">
                  </div>
                  <button class="btn btn-primary btn-subscribe">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    @extends('layouts.footer')
    <script type="text/javascript">
    $(function(){
    window.sr = ScrollReveal();
    if ($(window).width() < 768) {
      if ($('.timeline-content').hasClass('js--fadeInLeft')) {
        $('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
      }
      sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
    } else {
      sr.reveal('.js--fadeInLeft', {
        origin: 'left',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
      sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
    }
    sr.reveal('.js--fadeInLeft', {
        origin: 'left',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
      sr.reveal('.js--fadeInRight', {
        origin: 'right',
        distance: '300px',
        easing: 'ease-in-out',
        duration: 800,
      });
    });
    </script>
    <script type="text/javascript">
  	  $(document).ready( function() {
  	    $("#immersive_slider").immersive_slider({
  	      container: ".main"
  	    });
  	  });

    </script>
  </div>
  <script>

  	var _gaq=[['_setAccount','UA-11278966-1'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
  	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
  	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  	s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  <body>
</html>
