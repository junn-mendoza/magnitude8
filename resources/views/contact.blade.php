@extends('layouts.default')

@section('content')
	<style>
		body {
        background-color: #383838 !important;
    }
    .dark #header.transparent-header {background-color: {!! $siteData['frontend_config']['background-color'] !!} }
		@media (max-width: 991px)
		{
			#page-menu {display:none;}
		}
		a {
	    	text-decoration: none !important;
	    	color: #ccc;
		}
	</style>
	<section id="content" class="screen-size"  style="background-color:{!! $siteData['frontend_config']['background-color'] !!}">
		<div class="content-wrap h-100">
			<div class="container clearfix h-100">
				<div class="row clearfix h-100">
					<div class="col-xl-6 justify-content-center align-self-center">
						<span class='display-1 bold linepoint1'>{!! $siteData['frontend_config']['pageView']['title'] !!}</span>
						<p class='myLead neg5 line-1point3'>
							{!! $siteData['frontend_config']['description'] !!}
						</p>
					</div>
				</div>
			</div>
		</div>
		<a href="#" data-scrollto=".map" data-offset="0" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
	</section>

	<section id="content" class="map"  style="background-color:#3f3b59">
		<div class="content-wrap h-100">
			<div class="container clearfix h-100">
				<div class="row clearfix h-100">
					<div class="col-xl-12 justify-content-center align-self-center">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe  id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7220.908984906141!2d55.25188690029599!3d25.18789104872174!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f69d8f1555569%3A0xc2e17a2889dd184b!2sMagnitude+Advertising!5e0!3m2!1sen!2sus!4v1532245537983&language=ar" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                            <style>
                                .fluid-width-video-wrapper {
                                    height:400px ;
                                }
                                .mapouter {
                                    text-align:right;
                                    height:600px;
                                    width:100%;
                                }
                                .gmap_canvas {
                                    overflow:hidden;
                                    background:none!important;
                                    height:600px;width:100%;
                                    iframe { width:100%;}
                                } 
                            </style>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
    <section id="content" class="map"  style="background-color:#3f3b59">
        <div class="content-wrap h-100">
            <div class="container clearfix h-100">
                <div class="row clearfix h-100">
                    <div class="col-md-6 justify-content-center align-self-center">
                        <div class="isDesktop">
                            <p class='myLead ' style='font-size:18px !important'>
                                {!! $siteData['frontend_config']['contact']['desktop'] !!}
                            </p>
                        </div>
                        <div class="isMobile"><br/>&nbsp;<br/>
                            <p class='myLead ' style='font-size:18px !important'>
                                {!! $siteData['frontend_config']['contact']['mobile'] !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('addons')
<style>
       #google-map {
            height: 712px;
          width:100%%;
          /*margin-left: 25px;
          margin-right: 25px^*/
          box-sizing: border-box;
          
       }
       #google-map2 {
          height: 712px;
          width:97.5%;
          margin-left: 25px;
          margin-right: 25px;
          box-sizing: border-box;
          background:url(https://magnitude.ae/images/map.jpg);
       }
       @media (max-width: 767px)
		   {
         #google-map2 {
          height: 400px;
          margin: 0px;
          width:100%;
          background:url(https://magnitude.ae/images/map2.jpg);
        }
    		#google-map {
       		 height: 400px;
          margin: 0px;
          width:100%;
           
    		}
       }
    </style>
	<script>
        var map = "";
        function initMap() {
            //25.1892992!4d55.2560055
            var uluru = {lat: 25.1892992, lng: 55.2560055};
            //  var uluru = {lat: 0, lng: 0};
            map = new google.maps.Map(document.getElementById('google-map'), {
                zoom: 14,
                center: uluru,          
                gestureHandling: 'cooperative',         
                maptype: 'TERRAIN',			
                zoom: 14,					
            });
            var contentString = ''+
            '<b style="color:#000">Magnitude2 Advertising LLC</b>'+
            '<div id="bodyContent">'+
            '<a style="color:#333" href="https://www.google.ae/maps/place/Magnitude+Advertising/@25.189299,55.2538163,17z/data=!4m12!1m6!3m5!1s0x3e5f69d8f1555569:0xc2e17a2889dd184b!2sMagnitude+Advertising!8m2!3d25.189299!4d55.256005!3m4!1s0x3e5f69d8f1555569:0xc2e17a2889dd184b!8m2!3d25.189299!4d55.256005?hl=en" target="_blank">View Details</a></div>'+
            '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            var marker = new google.maps.Marker({
                position: uluru,            
                map: map
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
            infowindow.open(map, marker);
        }

    </script>
@endsection