@extends('layouts.default')

@section('content')
	<style>
		body {
	    	background-color: #383838 !important;
		}
		.dark #header.transparent-header {background-color: {!! $siteData['frontend_config']['background-color'] !!} }
	</style>

	<section id="content" class="screen-size"  style="background-color:{!! $siteData['frontend_config']['background-color'] !!}">
		<div class="content-wrap h-100">
			<div class="container clearfix h-100">
				<div class="row clearfix h-100">
					<div class="col-xl-8 justify-content-center align-self-center">
							<span class='display-1 bold linepoint9'>{!! $siteData['frontend_config']['pageView']['title'] !!}</span>
							<p class='myLead neg5 line-1point3'>{!! $siteData['frontend_config']['pageView']['description'] !!}</p>
					</div>
				</div>
			</div>
			<a href="#" data-scrollto=".clients" data-offset="0" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
		</div>
	</section>
    @inject('decorate', 'App\Helper\Decorator')
	<style>
		.client_img {
			background-size: cover;
		}
		{!! $decorate->clientStyle($siteData['frontend_config']['clients']) !!}
	</style>
	<section id="content" style="background-color:#9263cd; " class='clients pad-top80'>
		<div class="content-wrap " style="padding:0px; ">
			<div class="container clearfix">
				<ul class="clients-grid nobottommargin clearfix">
					{!! $decorate->clientSection($siteData['frontend_config']['clients']) !!}
				</ul>
			</div>
		</div>
	</section>
@endsection