@extends('layouts.default')

@section('content')
    @include('includes.feedstyle')
	<div class="subscribe_button">
		<a href="javascript:showsubscribe()"><i class="icon-email2"></i>&nbsp;&nbsp;&nbsp;{{ __('transcript.feeds_subscribe') }}</a>
	</div>
	<div class="subscribe_overlay">
		<div class="overlay_close" onclick="overlay_close()"><i class="icon-remove"></i></div>
		<div class="overlay_email" style='background-color:#174154; padding:20px;  position:absolute'>
        		<h3>{{ __('transcript.feeds_forupdates') }}</h3>
        		<div>
        			<div class="contact-form-result"></div>
        			<form method=post action="subscribe" name="template-contactform" novalidate="novalidate">
        				{{ csrf_field() }}
        			<div class="alignleft"><i class="icon-mail " style="font-size:100px; margin-top:-50px"></i></div><p>{{ __('transcript.feeds_tips') }}</p>
        			<input aria-invalid="true" type="email" id='email' name='email' class="required email form-control error" placeholder="{{ __('transcript.feeds_enteremail') }}"/><br/> <button name="submit" class="button button-3d button-large button-rounded button-green">{{ __('transcript.feeds_subscribe') }}</button>
        			</form> 
        		</div>
		</div>
	</div>
	<section id="content" class="screen-size"  style="background-color:{!! $siteData['frontend_config']['background-color'] !!}">
		<div class="content-wrap h-100">
			<div class="container clearfix h-100">
				<div class="row clearfix h-100">
					<div class="col-xl-12 justify-content-center align-self-center">
							{!! $siteData['frontend_config']['title'] !!}
							<br/><br/><br/><br/><p class="myLead line-1point3">{{ __('transcript.feeds_tips') }} 
						@if(app()->getLocale()=='en')
							<a href="javascript:showsubscribe()" style="color:#fff"><i class="icon-email2"></i></a></p>
						@endif
					</div>
				</div>
			</div>
			<a href="#" data-scrollto="{{ (app()->getLocale()=='en'?'.blog':'.instagram') }}" data-offset="0" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
		</div>
	</section>
	
@if(app()->getLocale()=='en')
	<!-- Content
		============================================= -->
    <section id="content" class="darkgray container blog container2">
        <div class="content-wrap">
            <!-- Posts === post-grid grid-container post-masonry post-masonry-full grid-2 clearfix -->
            <style>
                .post-grid.grid-2 .entry {
                    margin-left: 0px;
                    /* margin-right: 0; */
                }
                .post-grid.grid-2 {
                    margin-left: 0px;
                }
                .entry-meta li {
                    float: left;
                }
            </style>
            <div id="posts" class="post-grid grid-container post-masonry grid-2 " style="text-align:left !important" dir="ltr">
                <!--per post-->
                @foreach($blog as $single)
                    <div class="entry clearfix">
                    @if($single->image_blog!="")
                        <div class="entry-image">
                            <a href="/blog/{{$single->slug}}" class="readmore" target="_blank">
                            <img class="image_fade" src="{{ asset('images/magnitude-blog') }}/{{ $single->image_blog }}" alt="Standard Post with Image"></a>
                        </div>
                    @endif
                    <div class="entry-title">                        
                        <a href="/blog/{{$single->slug}}" class="readmore" target="_blank"><h3 class='display-2-blog bold bold-title linepoint9-blog' style='font-size:36px; margin-bottom:0px'>{!! strtoupper($single->title) !!}</h3>
                        @if($single->title_sub != "")
                            <h3 class='display-2-blog ultralight linepoint9-blog' style='font-size:32px'>{!! strtoupper($single->title_sub) !!}</h3></a>
                        @endif
                    </div>
                    <div class="entry-content">
                        <p class="myBlog">{!! $single->tidbits !!}</p>
                        <div style='float:right'><a href="/{{ (app()->getLocale()=='en'?'':app()->getLocale().'/')}}blog/{{$single->slug}}" class="readmore"  target="_blank">Read More</a></div>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://magnitude.ae/blog/{{$single->slug}}" target="_blank"><i class="icon-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/share?url=https://magnitude.ae/blog/{{$single->slug}}&amp;text={!! $single->title!!}&amp;hashtags={!! $single->hashtag !!}"  target="_blank"><i class="icon-twitter"></i></a></li>
                        <li><a href="http://www.facebook.com/sharer.php?u=https://magnitude.ae/blog/{{$single->slug}}" target="_blank"><i class="icon-facebook"></i></a></li>
                    </ul>
                </div>
                @endforeach
                <!--per post-->
            </div><!-- #posts end -->
        </div>
    </section><!-- #content end -->
@endif
	<!-- Content
	============================================= -->
	<section id="content" class='instagram'  style="background-color:#464646" >
		<div class="content-wrap  notoppadding" style="margin-left:4px !important; padding-top:6px !important">
			<div id="instafeed" class="portfolio grid-container clearfix">
			<!-- Portfolio Items
			============================================= -->
			</div>
		</div>
	</section><!-- #content end -->
	<blockquote id="instagram-post" class="instagram-media hidden">
	    <div style="padding:8px;">
	        <div class="ehInfo">
	          <a class="ehInfoUsername" href="" target="_blank">
	          <img src="{{asset('images/logo_white.svg') }}" style="height:50px"/></a>  
	          <a id="btn-follow" href="https://www.instagram.com/magnitudeadvertising/" target="_blank" class="pull-right">Follow</a>
	        </div>
	        <div class="instagram-header" >
	            <a id="instagram-post-link" href="" target="_blank"><img src="" id="instagram-image" pagespeed_url_hash="2991696875" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></a>
	        </div>
	        <p class="instagram-caption" dir='ltr'></p>
	        <p class="text-bold" dir='ltr'><span class="instagram-likes"></span> likes<span class="instagram-comments"></span> comments</p>
	    </div>
	</blockquote>
@endsection

@section('addons')
    @include('includes.feedscript')
@endsection
