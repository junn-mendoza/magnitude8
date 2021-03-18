@extends('layouts.default')

@section('content')
	<style>
		body {
	    	background-color: #383838 !important;
		}
		.dark #header.transparent-header {background-color: {!! $siteData['frontend_config']['background-color'] !!} }
		@media (max-width: 991px) {
			#page-menu {display:none;}
		}
		@if(app()->getLocale() === 'fr')
    		@media (max-width: 575px) {
				.display-1 {
			    	font-size: 2.5rem!important;			    
				}
			}
			@media (max-width: 321px){
				.display-1 {
			    	font-size: 2rem!important;
				}
			}
		@endif
	</style>
	<!-- Page Sub Menu
	============================================= -->
	<div id="page-menu" class="dots-menu"  style=" z-index:1002;">
		<div id="page-menu-wrap">
			<div class="container clearfix">
				<div class="menu-title">Explore <span>Magnitude</span></div>
				<div class='dotmenu'>
	                <ul>
	                    <li><a href=".2Desktop" class="dot" data-offset="0"><span>{!!__('transcript.approach_menu1')!!}</span></a></li>
	                    <li><a href=".3Desktop" class="dot"  data-offset="0"><span>{!!__('transcript.approach_menu2')!!}</span></a></li>
	                    <li><a href=".4Desktop" class="dot"  data-offset="0"><span>{!!__('transcript.approach_menu3')!!}</span></a></li>
	                    <li><a href=".5Desktop" class="dot"  data-offset="0"><span>{!!__('transcript.approach_menu4')!!}</span></a></li>
	                    <li><a href=".6Desktop" class="dot"  data-offset="0"><span>{!!__('transcript.approach_menu5')!!}</span></a></li>
						<li><a href=".7Desktop" class="dot"  data-offset="0"><span>{!!__('transcript.approach_menu6')!!}</span></a></li>
	                </ul>
	            </div>
				<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
			</div>
		</div>
	</div><!-- #page-menu end -->
	<div class="isMobile">
		{!! $decorate->pageSection($siteData['frontend_config']['approach']) !!}
	</div>
	<div class="isDesktop">
		{!! $decorate->pageSection($siteData['frontend_config']['approach'], false) !!}
	</div>
@endsection

@section('addons')
	 @include('includes.dotscroll')
@endsection