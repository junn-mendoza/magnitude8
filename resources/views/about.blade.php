@extends('layouts.default')

@section('content')
	<style>
		body {
	    	background-color: #41a69e !important;
		}
		.dark #header.transparent-header {background-color: {!! $siteData['other_config']['background-color'] !!} }
		.slider-caption p {
			margin-top:-10px !important;
		}
		@media (max-width: 991px)
		{
			#page-menu {display:none;}
			.display-3 {
			    font-size: 3rem;
			    font-weight: 300;
			    line-height: 1;
			}
		}
		.slider-caption, .flex-caption {
		    max-width: 850px;
		}
		.dark label {
			color:#fff !important;
		}
		.dark .form-control:not(.not-dark), .dark .sm-form-control:not(.not-dark) {
    		color: #fff;
		}
		::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
		  color: #ffa947 !important;
		  opacity: 1; /* Firefox */
		}
		.dark .form-control select:invalid { color: #ffa947 !important; }
		:-ms-input-placeholder { /* Internet Explorer 10-11 */
		  color: #ffa947 !important;
		}
		::-ms-input-placeholder { /* Microsoft Edge */
		  color: #ffa947 !important;
		}
		select:required:invalid {
		  color:  #ffa947 !important;
		}
		select {
			background-color: #CC5225 !important;
		}
		option {
		  color: #fff;
		  
		}
		.dark .form-control:not(.not-dark) option, .dark .sm-form-control:not(.not-dark) option {
		    background-color: transparent !important;
		}
		.btn-success {background-color: #ffa947 !important; color: #fff !important; border:1px solid #ffa947;}

		.btn-primary { border:1px solid #ffa947; background-color: #ffa947 !important; }
		
	@if(app()->getLocale() === 'ar')
		.myLead {
		    line-height: 1.8 !important;
		}
	@endif
	</style>
	
<!-- Page is for Mobile ============================================= -->
		<div class='isMobile'>				
			<section id="content" class="full-screen" style="background-color:#41A69E">
				<div class="content-wrap h-100">
					<div class="container clearfix justify-content-center align-self-center">
						<div class="row clearfix">
							<div class="col-xl-8 pad-top80">								
								<span class='display-1 bold linepoint9'>{!! $siteData['frontend_config']['title'] !!}</span>
								<p class='myLead line-1point3 neg5'>{!! $siteData['frontend_config']['description'] !!}</p>
							</div>
						</div>
					</div>
					<a href="#" data-scrollto=".team_page1" data-offset="0" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
				</div>
			</section>			
			<!--#work with us mobile-->
			<section id="content" class="full-screen"  style="background-color:#FF672E ">

				<div class="content-wrap h-100">
						<!--justify-content-center align-self-center-->
					<div class="container clearfix justify-content-center align-self-center">
						<div class="row clearfix">

							<div class="col-xl-12 pad-top80">
								<!--Our Expertise and Skills:-->
									<span class='display-1 bold linepoint9'>{!! $siteData['frontend_config']['title2'] !!}</span>									
									<p class='myLead  line-1point3'>{!! $siteData['frontend_config']['description2'] !!}</p>
								
							</div>
						</div>

					</div>
					<a href="#" data-scrollto=".work" data-offset="0" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
				</div>
			</section>
		</div>
<!-- Page is for Desktop
		============================================= -->
		<div class='isDesktop'>	
			<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix about">
                <div class="slider-parallax-inner">

                    <div class="swiper-container swiper-parent">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide dark" style="background-color:#41A69E">
                                <div class="container clearfix">
                                    <div class="slider-caption slider-caption-left">
                                        <span class='display-1 bold'>{!! $siteData['frontend_config']['title'] !!}</span>
                                        <p class='myLead' style='margin-top: 15px !important;' {!! (app()->getLocale()=='ar'?"dir='rtl'":'') !!}>{!! $siteData['frontend_config']['description'] !!}</a></p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <a href="#" data-scrollto=".work_page"  data-offset="0" class="dark one-page-arrow "><i class="icon-angle-down infinite animated fadeInDown" ></i></a>	
                </div>
		    </section>
		    <!-- Content  -->		
            <section id="content" class="content  work_page full-screen" style="background-color:#ff672e;z-index:900;">
                    <div class="content-wrap h-100">			
                        <div class="container clearfix h-100 ">						
                            <div class="row clearfix  h-100 ">
                                <div class="col-xl-7  justify-content-center align-self-center">									
                                        <span class='display-3 bold' style='line-height:0.8'>{!! $siteData['frontend_config']['title2'] !!}</span><br/><br/>
                                        <!--style='line-height:1.2 !important'-->
                                        <p class='h5 notopmargin neg5 myLead  line-1point3' >{!! $siteData['frontend_config']['description2'] !!}</p>									
                                </div>
                            </div>						
                        </div>
                    </div>
			</section>
		</div>			
@endsection

@section('addons')
	 @include('includes.dotscroll')	
@endsection