<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<style>
		body {
	    	background-color: #464646 !important;
		}
		.dark #header.transparent-header {
            background-color: {!! $siteData['frontend_config']['background-color'] !!} 
        }
		.dark .tabs.tabs-alt ul.tab-nav li a, .dark ul.tab-nav li.ui-tabs-active a {
		    background-color: transparent;
		}
		.dark ul.tab-nav li a {
		    color: #555;
		    background-color: rgba(0,0,0,0.15);
		}		
		.portfolio-item {
		    padding: 0px ; 
		}
		#header.sticky-header #header-wrap {
	    	background-color: rgba(0,0,0,0.7);
	    	transition:0.6s;
		}
		.entry-content p { 
            color:#555; 
        }
		.entry-image p  { 
            color:#555; 
        }
		.entry-title h2 a { 
            color:#555 !important; 
        }
		.portfolio-overlay a {
		    position: absolute;
		    top: 0%;
		    left: 0%;
		    background-color: #F5F5F5;
		    width: 95% !important;
		    height: 40px !important;
		    margin: 10px;
		    font-size: 16px;
		    line-height: 22px;
		    text-align: left;
		    color: #444;
		    border-radius: 0%;
		    -webkit-backface-visibility: hidden;
		    padding-left: 0px;
		}
		.dark .portfolio-overlay a {
		    background-color: rgba(255,0,0,0);
		    color: #FFF;
		}
		.darkgray {
		    background-color:#464646 !important;
		}
		.entry-content p {
		    color: #fff;
		}

		a, body {
		     color: #cccccc; 
		}
		p {font-size:1.3rem;}
		.entry:after {
    		background-color: transparent;
		}
		.title-blog { font-family: 'Open Sans';font-size:700; text-transform: uppercase; letter-spacing: 1px}

		.display-2-blog {
		    font-size: 4rem;
		    font-weight: 300;
		    line-height: 1.2;
		}
		@media (max-width: 575px) {
			.display-2-blog {
		    font-size: 3rem;
		    font-weight: 300;
		    line-height: 1.2;
				}
		}
		.linepoint9-blog {
		    line-height: 1;
		}
		.subscribe_overlay { position: fixed; /* Sit on top of the page content */
  
            width: 100%; /* Full width (cover the whole page) */
            height: 100%; /* Full height (cover the whole page) */
            top: 0; 
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.8); /* Black background with opacity */
            z-index: 9999; /* Specify a stack order in case you're using a different order for other elements */
            cursor: pointer; /* Add a pointer on hover */
            display: none;
        }
		.overlay_email {
            top:50%;left:50%; 
            margin-left:-225px;
            width:450px; 
            margin-top:-250px;
        }
		.icon-remove {
            font-size:20px; 
            position: fixed; 
            right:10px;
        }
		.subscribe_button { 
            position:fixed; 
            width: 170px; 
            padding:10px 30px; 
            z-index: 9998; 
			background-color: #ff452a; 
            left:100%; 
            margin-left:-190px; 
            top:200px; 
            display:none;}
		.subscribe_button a { 
            color:#fff; 
        }
		.bold-title {
		    font-family: helveticaneuebold;
		}
		.ultralight-title {
		    font-family: helvetica_neue_ultralight;
		}
	</style>