@extends('layouts.default')

@section('content')
	<style>
		body {
	    	background-color: #383838 !important;
		}
		.dark #header.transparent-header {background-color: {!! $siteData['frontend_config']['background-color'] !!} }
		@if(app()->getLocale()=='fr')
		.ultralight.french { 
			letter-spacing: 4px;
			
		}
		@endif
		@media (max-width: 991px)
		{
			#page-menu {display:none;}
			@if(app()->getLocale()=='fr')
			.ultralight.french { 
				letter-spacing: 2px;
				font-size:1.8em !important;
			}
			@endif
		}
		
    </style>
    @inject('decorate', 'App\Helper\Decorator')
	<!-- Page Sub Menu
	============================================= -->
	<div id="page-menu" class="dots-menu"  style=" z-index:1002;">
		<div id="page-menu-wrap">
			<div class="container clearfix">
				<div class="menu-title">Explore <span>Magnitude</span></div>
                <div class='dotmenu'>
                    <ul>
                        <li><a href=".2Desktop" class="dot" data-offset="0"><span>{!! __('transcript.expertise_menu1')!!}</span></a></li>
                        <li><a href=".3Desktop" class="dot" data-offset="0"><span>{!! __('transcript.expertise_menu2')!!}</span></a></li>
                        <li><a href=".4Desktop" class="dot" data-offset="0"><span>{!! __('transcript.expertise_menu3')!!}</span></a></li>
                        <li><a href=".5Desktop" class="dot" data-offset="0"><span>{!! __('transcript.expertise_menu4')!!}</span></a></li>
                    </ul>
                </div>
			    <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
			</div>
		</div>
	</div><!-- #page-menu end -->
	<div class="isMobile">
		{!! $decorate->pageSection($siteData['frontend_config']['expertise']) !!}
	</div>
	<div class="isDesktop">
		{!! $decorate->pageSection($siteData['frontend_config']['expertise'], false) !!}
	</div>
@endsection
@section('addons')
	 @include('includes.dotscroll')
@endsection