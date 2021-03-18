<!-- Header	transparent-header semi-transparent-->
		
<header id="header" class="transparent-header @if(isset($isTry)) semi-transparent @endif full-header static-sticky" data-sticky-class="not-dark">			
    <div id="header-wrap">
        <div class="container clearfix"><div class="side-panel-trigger fright burger"><img src="https://magnitude.ae/images/menu1.png" alt="burger menu" width="30"></div>
            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="/" class="standard-logo" data-dark-logo="{{ asset("images/logo_dark.svg")}}"><img src="{{ asset("images/logo_dark.svg")}}" alt="Magnitude Logo"></a>
                <a href="/" class="retina-logo" data-dark-logo="{{ asset("images/logo_dark.svg")}}"><img src="{{ asset("images/logo_dark.svg")}}" alt="Magnitude Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="dark ">
                @php
                    $url = (app()->getLocale()=='' || app()->getLocale()=='en'?'':'/'.app()->getLocale());
                @endphp
                @php
                        $lang = Session::get('locale');
                    @endphp
                <ul>
                    <li {!! (isset($isAbout)?' class="current"':'') !!}><a href="{{$url}}/about"><div>{{ __('transcript.menu_1') }}</div></a></li>
                    <li {!! (isset($isWork)?' class="current"':'') !!}><a href="{{$url}}/work/1"><div>{{ __('transcript.menu_2') }}</div></a></li>							
                    <li {!! (isset($isClients)?' class="current"':'') !!}><a href="{{$url}}/clients"><div>{{ __('transcript.menu_3') }}</div></a></li>							
                    <li {!! (isset($isApproach)?' class="current"':'') !!}><a href="{{$url}}/approach"><div>{{ __('transcript.menu_4') }}</div></a></li>
                    <li {!! (isset($isExpertise)?' class="current"':'') !!}><a href="{{$url}}/expertise"><div>{{ __('transcript.menu_5') }}</div></a></li>						
                    <li {!! (isset($isFeeds)?' class="current"':'') !!}><a href="{{$url}}/feeds"><div>{{ __('transcript.menu_6') }}</div></a></li>							
                    <li {!! (isset($isContact)?' class="current"':'') !!} style="position:relative"><a href="{{$url}}/contact"><div>{{ __('transcript.menu_7') }}</div></a></li>
                </ul>
                <div class='{{ ($lang=='ar'?'arabswitcher':'switcher') }} isDesktop'>
                    @php
                        $cnt = 1;
                        $oldLocale =  app()->getLocale();
                        $locale = (app()->getLocale()==''?'en':app()->getLocale());
                        $index = array_search($locale,config('app.language'));
                        $newArray = config('app.language');
                        if($index !== FALSE){
                            unset($newArray[$index]);
                        }
                        use Illuminate\Routing\UrlGenerator;
                        $url = Request::path();
                        $url = (isset($isClients)?$url:str_replace($oldLocale,"", $url));
                        
                        if(isset($isWork))
                        {
                              $currentPath = ($oldLocale==null || $oldLocale=='en'?$url:substr($url,1));
                        }
                        else
                        {
                            if(isset($isClients) && $oldLocale=='en')
                            {
                                
                            }
                            else
                            {
                                $url = str_replace($oldLocale."/","", $url);
                            }
                            
                            
                            $currentPath = str_replace("/","", $url);
                        }
                        
                        $wordLang = "";
                    @endphp
                    @foreach($newArray as $lang)
                        @php
                        switch($lang)
                        {
                            case "en":
                                $wordLang = "English";
                                break;
                            case "fr":
                                $wordLang = "Français";
                                break;
                            case "ar":
                                $wordLang = "<span style='font-family:Cairo !important;'>العربية</span>";
                                break;
                        }
                        @endphp
                        @if($cnt>1 && $cnt < count(config('app.language'))   )
                            &nbsp;/&nbsp;
                        @endif
                        @if(app()->getLocale() != $lang)
                        <a href="/locale/{{strtolower($lang)}}" class='dark'>{!! $wordLang !!}</a>
                        @endif
                        @php
                            $cnt++
                        @endphp
                    @endforeach
                </div>
            </nav><!-- #primary-menu end -->
    </div>
</header><!-- #header end -->