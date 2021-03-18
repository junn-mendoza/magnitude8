@extends('layouts.default')

@section('content')
	<style>
		body {
	    	background-color: #383838 !important;
		}
		.dark #header.transparent-header {
            background-color: {!! $siteData['frontend_config']['background-color'] !!} 
        }
		.portfolio-item {
		    padding:  0 12px 12px 0 !important;
		}
		.portfolio-overlay a {
		    position: absolute;
		    top: 50%;
		    left: 15%; 
		    background-color: #F5F5F5;
		    width: 100% !important;
		    height: 40px !important;
		    margin: -28px 0 0 -44px;
		    font-size: 18px;
		    line-height: 40px;
		    text-align: left; 
		    color: #444;
		    border-radius: 0%; 
		    -webkit-backface-visibility: hidden;
		    padding-left:15px;
		}
		.portfolio-overlay .portfolio-desc {
			text-align: left !important;
			margin:0 15px;
		}
		.portfolio-overlay .portfolio-desc a i { 
            margin-top:15px; 
            font-size: 30px;
        }
		.instagram-header img { 
            width:100% !important; 
        }
		.page-load-status {
            background-color:#fff;
        }
		.css3-spinner {
            color:#d53156;
        }		
		.portfolio-desc2 {
            top:50% !important;
        }

		@if(app()->getLocale()=='ar')
		 .content-wrap {
	   	    padding: 0px 0;
		    }
		@endif
	</style>
	<section id="content" class="screen-size"  style="background-color:{!!  $siteData['frontend_config']['background-color'] !!} ">
		<div class="content-wrap h-100">
			<div class="container clearfix h-100">
				<div class="row clearfix h-100">
					<div class="col-xl-8 justify-content-center align-self-center">
						<span class='display-1 bold linepoint9'>{!! $siteData['frontend_config']['title'] !!}</span>
						<p class='myLead neg5 line-1point3'>{!! $siteData['frontend_config']['description'] !!}</p>
					</div>
				</div>
			</div>
			<a href="#" data-scrollto=".work" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
		</div>
	</section>
    <!-- Content -->
    @inject('decorate', 'App\Helper\Decorator')
	<section id="content" class='work' style="background-color:#fff">
		<div class="content-wrap nobottompadding notoppadding">
			<!-- Portfolio Items
			============================================= -->
			<div id="portfolio" class="portfolio portfolio-nomargin portfolio-full portfolio-masonry mixed-masonry grid-container clearfix" style="margin-left:4px !important; padding-top:6px !important">
				
				 	@if($siteData['frontend_config']['page'] == 1)
						{!! $decorate->smallLightbox( $siteData['frontend_config']['perPageView'], 0 ) !!}
					@else
						{!! $decorate->smallLightbox( $siteData['frontend_config']['perPageView'], 1 ) !!}
					@endif
					
			</div><!-- #portfolio end -->
			<!--status-->
			<div class="page-load-status">
				<div class="css3-spinner infinite-scroll-request">
					<div class="css3-spinner-ball-pulse-sync">
						<div><i class="fa fa-circle" aria-hidden="true"></i></div>
						<div><i class="fa fa-circle" aria-hidden="true"></i></div>
						<div><i class="fa fa-circle" aria-hidden="true"></i></div>
					</div>
				</div>
				<div class="infinite-scroll-last"></div>
				<div class="infinite-scroll-error"></div>
			</div>
			<!-- Pagination
			============================================= -->
			@php
				$locale =  app()->getLocale();
				$locale =  ($locale=='' || $locale=='en'?'':'/'.$locale)
			@endphp
			<div class="center d-none">
				<a href="{{$locale}}/work/2" class="button button-3d button-dark button-large button-rounded load-next-posts">Load more..</a>
			</div>
			<!--end status-->
		</div>
	</section><!-- #content end -->
@endsection
@section('addons')
	@include('includes.workscript')
@endsection