
<!-- Footer
============================================= -->
<footer id="footer" class="dark footer-stick">
		<!-- Copyrights
		============================================= -->
		<div id="copyrights">
			<div class="container-fluid wrapper-fluid clearfix">
				<div class="row clearfix h-100">
				<div class="col-md-4 mt-2 justify-content-center align-self-center a-center">
					{!! __('transcript.home_reserved') !!}@if(app()->getLocale()=='ph')<span class='isDesktop2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='/privacypolicy' style='color:#fff'>{{__('transcript.privacypolicy')}}</a></span>@endif
					
					
				</div>
				<div class="col-md-4 mt-2 isDesktop" style='margin:0 auto; box-sizing: border-box;'>
					<div class="text-center w-100 b-center" >
					<a href="tel:+971 4 338 7742" class="social-icon si-borderless si-cloudapp fnone inline" data-toggle="tooltip" data-original-title='{{ __('transcript.callus') }}'>
						<i  class='icon-call'></i>
					    <i  class='icon-call'></i>
					</a>
					<a href="mailto:info@magnitude.ae" class="social-icon si-borderless si-cloudapp center-icon fnone inline" data-toggle="tooltip" data-original-title='{{ __('transcript.emailus') }}'>
						<i  class='icon-email3'></i>
						<i  class='icon-email3'></i>
					</a>
					<a href="https://www.google.ae/maps/place/Magnitude+Advertising/@25.189299,55.2538163,17z/data=!4m12!1m6!3m5!1s0x3e5f69d8f1555569:0xc2e17a2889dd184b!2sMagnitude+Advertising!8m2!3d25.189299!4d55.256005!3m4!1s0x3e5f69d8f1555569:0xc2e17a2889dd184b!8m2!3d25.189299!4d55.256005?hl=en" target="_blank" class="social-icon si-borderless si-cloudapp center-icon fnone inline"  data-toggle="tooltip" data-original-title='{{ __('transcript.findus') }}'>
						<i  class='icon-location'></i>
						<i  class='icon-location'></i>
					</a>
					</div>
				</div>
				<div class="col-md-12 col_last tleft  mt-2 isMobile">
					<div class="fleft clearfix">

						<a href="tel:+971 4 338 7742" class="social-icon si-borderless si-cloudapp fnone inline" data-toggle="tooltip" data-original-title='{{ __('transcript.callus') }}'>
							<i  class='icon-call'></i>
						    <i  class='icon-call'></i>
						</a>
						<a href="mailto:info@magnitude.ae" class="social-icon si-borderless si-cloudapp center-icon fnone inline" data-toggle="tooltip" data-original-title='{{ __('transcript.emailus') }}'>
							<i  class='icon-email3'></i>
							<i  class='icon-email3'></i>
						</a>
						<a href="https://www.google.ae/maps/place/Magnitude+Advertising/@25.189299,55.2538163,17z/data=!4m12!1m6!3m5!1s0x3e5f69d8f1555569:0xc2e17a2889dd184b!2sMagnitude+Advertising!8m2!3d25.189299!4d55.256005!3m4!1s0x3e5f69d8f1555569:0xc2e17a2889dd184b!8m2!3d25.189299!4d55.256005?hl=en" target="_blank" class="social-icon si-borderless si-cloudapp center-icon fnone inline"  data-toggle="tooltip" data-original-title='{{ __('transcript.findus') }}'>
							<i  class='icon-location'></i>
							<i  class='icon-location'></i>
						</a>
					</div>
					<div class="fright clearfix tright">
						<a href="https://www.linkedin.com/company/magnitude-advertising-llc-/?trk=company_name" target="_BLANK" class="social-icon si-borderless si-cloudapp">
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
						</a>
						<a href="https://www.facebook.com/magnitude.ae" target="_BLANK" class="social-icon si-borderless si-cloudapp">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>
						<a href="https://www.instagram.com/magnitudeadvertising/" target="_BLANK" class="social-icon si-borderless si-cloudapp">
							<!--si-small si-borderless si-instagram-->
							<i class="icon2-instagram"></i>
							<i class="icon2-instagram"></i>
						</a>

					</div>
				</div>
				<div class="col-md-4 col_last tright  mt-2 isDesktop">
					
					<div class="fright clearfix c-center">

						<a href="https://www.linkedin.com/company/magnitude-advertising-llc-/?trk=company_name" target="_BLANK" class="social-icon si-borderless si-cloudapp">
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
						</a>

						<a href="https://www.facebook.com/magnitude.ae" target="_BLANK" class="social-icon si-borderless si-cloudapp">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						
						<a href="https://www.instagram.com/magnitudeadvertising/" target="_BLANK" class="social-icon si-borderless si-cloudapp">
							<i class="icon2-instagram"></i>
							<i class="icon2-instagram"></i>
						</a>
					</div>
					<div class="clear"></div>
				</div>
				</div>
			</div>

		</div><!-- #copyrights end -->
	</footer><!-- #footer end -->
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>



</body>
</html>




<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Questrial|Quicksand:300,400,500,700|Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	
<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="{{ asset("js/jquery.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/venobox/venobox.min.js") }}" defer></script>

<script type="text/javascript" src="{{ asset("js/plugins.js") }}" defer></script>
@if(isset($isFeeds))
<script type="text/javascript" src="{{ asset("js/custom_instagram.js") }}" ></script>
@endif

<!-- Bootstrap File Upload Plugin -->
@if(isset($isAbout))

	<script src="{{ asset("js/components/bs-filestyle.js") }}"></script>
@endif
<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{ asset("js/functions.minify.js") }}" defer></script>
<script type="text/javascript" src="{{ asset("js/lightbox.minify.js") }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.12.0/lazyload.min.js"></script>

<script type="text/javascript" defer>
	$(document).ready(function(){
		var myLazyLoad = new LazyLoad({
			    elements_selector: ".lazy"
			});
        // this part disables the right click
        $('img').on('contextmenu', function(e) {
            return false;
        });

        $( ".closecookie" ).click(function() {
		  $( ".overlaycookie" ).slideUp( "slow", function() {
		    // Animation complete.
		  });
		});
        $('img').bind("contextmenu", function(e) {
			    return false;
			});
        //this part disables dragging of image
        $('img').on('dragstart', function(e) {
            return false;
        });

        $(document).on('contextmenu', 'img', function() {
	        return false;
	    });
        // SCREEN MANIPULATION - force screen in fullsize
		$w = $(window).height();
		$('.content-about').css('height',$w+'px');
		height = $(window).height();
		$('.makeheightfull').css('height',height+18);
	    $('.makescreen-size').css('height',height-100);
        $('.screen-size').css('height',$(window).height()-100);
        $('.screen-size-full').css('height',$(window).height());
        // Google refresh
   		$('.maprefresh').click(function(){
			latitude = 25.1890311;
			longitude = 55.2556631;
			var latlng = new google.maps.LatLng(latitude,longitude);
			google.maps.event.addListener(map, 'resize', function() {
		        map.setCenter(latlng);
		    });
		    google.maps.event.trigger(map, 'resize');
		});
   		//putting image on the client logo
		$( ".clients-grid li" ).each(function( index ) {
		 	img = $(this).attr('data-img');
		 	$(this).find("img").css({"background-image":"url(images/clients/" + img + ".png)","background-size":"cover"});
		});
		$(window).scroll(function(){
		
	        <?php 
	        if(!isset($isIndex))
	        {
	        ?>
	            if($(window).scrollTop()>=5)
	             {
	                $('#header.transparent-header.full-header #logo img').css('margin-top','0px');
	                $('#primary-menu ul li > a').css('padding','25px 15px 20px'); 
	            }
	            else
	            {
	                $('#primary-menu ul li > a').css('padding','50px 15px 10px');
	                $('#header.transparent-header.full-header #logo img').css('margin-top','20px');
	            }
	        <?php 
	        }
	        ?>
	        
		});
		$(".portfolio-overlay, .portfolio-item").on("contextmenu",function(e){
		       return false;
		    });

	});
    
 	

	
</script>


