<!DOCTYPE html>
@php
    $locale =  app()->getLocale();
    if($locale=='ar') {
        echo '<html dir="rtl" lang="ar">';
    }
    else {
        echo '<html dir="ltr" lang="en-AE">';
    }
@endphp
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Emerald Junn" />
	<meta http-equiv="Expires" content="30">	
	<link rel="alternate" href="https://magnitude.ae" hreflang="en-us" />
	<link rel="shortcut icon" href="{{ asset("favicon.png")}}">
	<link rel="mask-icon" href="{{ asset("logo-m.svg") }}" color="navy">
	<link rel="alternate" href="https://magnitude.ae/" hreflang="en-ae" />

<!-- Stylesheets
	============================================= -->
@if($locale!='ar')    
	<!--start EN FR-->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Cairo:300,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css"  media="all"/>    
	<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}" type="text/css"  media="all">
	<link rel="stylesheet" href="{{ asset("style.minify.css") }}" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{ asset("css/swiper.css") }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset("css/dark.css") }}" type="text/css"  media="all"/>
	<link rel="stylesheet" href="{{ asset("css/font-icons.css") }}" type="text/css"  media="all"/>
	<!--end EN FR-->
@else
    <!--start AR-->
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,700&display=swap&subset=arabic,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}" type="text/css"  media="all">
    <link rel="stylesheet" href="{{ asset("css/bootstrap-rtl.css") }}" type="text/css"  media="all">
    <link rel="stylesheet" href="{{ asset("style.minify.css") }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset("style-rtl.css") }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset("css/swiper.css") }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset("css/dark.css") }}" type="text/css"  media="all"/>
    <link rel="stylesheet" href="{{ asset("css/dark-rtl.css") }}" type="text/css"  media="all"/>
    <link rel="stylesheet" href="{{ asset("css/font-icons.css") }}" type="text/css"  media="all"/>
    <link rel="stylesheet" href="{{ asset("css/font-icons-rtl.css") }}" type="text/css"  media="all"/>
	<!--end AR-->
@endif	
	<!--custom fonts-->
	<link rel="stylesheet" href="{{ asset("css/font-custom.minify.css") }}" type="text/css"  media="all"/>
	<link rel="stylesheet" href="{{ asset("css/animate.css") }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset("css/magnific-popup.minify.css") }}" type="text/css" />

@if(isset($isAbout))
	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="{{ asset("css/components/bs-filestyle.css") }}" type="text/css" />
@endif
@if($locale!='ar')
	<!--start EN FR-->
	<link rel="stylesheet" href="{{ asset("css/responsive.minify.css") }}" type="text/css" />
	<!--end EN FR-->
@else
    <!--start AR-->
    <link rel="stylesheet" href="{{ asset("css/responsive.minify.css") }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset("css/responsive-rtl.css") }}" type="text/css" />
    <!--end AR-->
@endif
	
	<!---->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{ asset("css/custom.minify.css") }}" type="text/css" />

@if($locale=='ar')
	<link rel="stylesheet" href="{{ asset("css/ar.css") }}" type="text/css" />
@endif
	<link rel="stylesheet" href="{{ asset("fonts.css") }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset("js/venobox/venobox.minify.css") }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset("css/lightbox.min.css") }}" type="text/css"/>
	<link rel="stylesheet" href="{{ asset("css/dotmenu.minify.css") }}"> 
	<link rel="stylesheet" href="{{ asset("css/custom2.css") }}"> 
@if($locale=='fr')
	<link rel="stylesheet" href="{{ asset("css/fr.css") }}"> 	
@endif
	<!-- Resource style -->
	<meta name="description" content="{{ $siteData['other_config']['description'] }}" />
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WVS3H4C');</script>
	<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55882096-1"></script>
	<script >
	    window.dataLayer = window.dataLayer || [];
	    function gtag(){dataLayer.push(arguments);}
	    gtag('js', new Date());

	    gtag('config', 'UA-55882096-1', { 'optimize_id': 'GTM-WG8B7VH'});
	</script>
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Organization",
	  "name": "Magnitude Advertising ",
	  "url": "https://magnitude.ae",
	  "sameAs": [
	    "https://www.facebook.com/magnitude.ae/",
	    "https://www.instagram.com/magnitudeadvertising/",
	    "https://www.linkedin.com/company/magnitude-advertising-llc-/"
	  ]
	}
	</script>

	<!-- Facebook Pixel Code -->
	<script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '405411949945205');
        fbq('track', 'PageView');
	</script>
	
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=405411949945205&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
	<!-- Document Title
	============================================= -->
	<title>Magnitude Advertising</title>
</head>
<!--{{ (isset($isWork)?"data-loader-timeout='16000'":"") }}"   data-speed-in=1500 data-animation-out=fadeOut data-speed-out=800 data-loader=1 class="stretched dark side-push-panel side-panel-right sticky-responsive-menu device-xxs"-->

@if($locale=='ar')

<body  class="stretched rtl dark">

@else

<body  class=" stretched dark  side-push-panel side-panel-right sticky-responsive-menu device-xxs " {{ (isset($isWork)!=null?"data-loader-timeout=40000":"") }}>

@endif

	<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVS3H4C" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
	<div id="side-panel" class="dark">
		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><img src="{{ asset("images/close1.png") }}"  width="30" style='margin-top:15px; margin-right:20px' alt="close"/></a></div>
		<div class="side-panel-wrap">
			<div class="widget clearfix">
				@php
                    //$oldLocale =  app()->getLocale();
                    $url = ""; //(app()->getLocale()=='' || app()->getLocale()=='en'?'':'/'.app()->getLocale());
                    if(app()->getLocale()=='fr')
                    {
                        echo '<style>.nav-tree li a {   
                                    font-size: 22px !important;
                                }</style>';
                    }
				@endphp
				<!-- Primary Navigation

					============================================= -->
				<nav  class="nav-tree nobottommargin" >
					<ul>
						<li {!! (isset($isAbout)?' class="current"':'') !!}><a href="{{$url}}/about"><div>{{ __('transcript.menu_1') }}</div></a></li>
                        <li {!! (isset($isWork)?' class="current"':'') !!}><a href="{{$url}}/work/1"><div>{{ __('transcript.menu_2') }}</div></a></li>
                        <li {!! (isset($isClients)?' class="current"':'') !!}><a href="{{$url}}/clients"><div>{{ __('transcript.menu_3') }}</div></a></li>
                        <li {!! (isset($isApproach)?' class="current"':'') !!}><a href="{{$url}}/approach"><div>{{ __('transcript.menu_4') }}</div></a></li>
                        <li {!! (isset($isExpertise)?' class="current"':'') !!}><a href="{{$url}}/expertise"><div>{{ __('transcript.menu_5') }}</div></a></li>
                        <li {!! (isset($isFeeds)?' class="current"':'') !!}><a href="{{$url}}/feeds"><div>{{ __('transcript.menu_6') }}</div></a></li>
                        <li {!! (isset($isContact)?' class="current"':'') !!}><a href="{{$url}}/contact"><div>{{ __('transcript.menu_7') }}</div></a></li>
					</ul>
					<div style='font-size:22px; color: #bbb; margin-top:25px' >
						@inject('decorate', 'App\Helper\Decorator')
						{!! $decorate->setLanguageForMobile() !!}
                    </div>
				</nav>
			</div>
		</div>
	</div>
	<div id="wrapper" class="clearfix">
	
