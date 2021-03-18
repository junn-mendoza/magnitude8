<?php
namespace App\Helper;
use App\Helper\Helper;
class Decorator
{
	use Helper;
    private $url;
	function __construct()
	{
		if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
		    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
		    $protocol = 'https://';
		}
		else {
		    $protocol = 'http://';
		}
		$this->url = $protocol.$_SERVER['HTTP_HOST'].'/images/work/clients/';
	}

	/**
	 * Homepage of the site section
	 * 
	 * @author emerald junn
	 * @since 15/03/2021
	 * 
	 * @version 2.0.0
	 *
	 * @param array $options
	 * @return string
	 */
    public function section($options)
    {
		echo '<section id="content" class="content '.(isset($options['header-class'])?$options['header-class']:'full-screen makeheightfull') .' '.$options['class_id'].'"  style="background-color:'.$options['bg-color'].'">'. PHP_EOL;
		echo '   <div class="content-wrap h-100" '.(isset($options['no-padtop-image'])?'style="padding:0px"':'').'>'. PHP_EOL;
		echo '      <div class="container clearfix justify-content-center align-self-center h-100">
						<div class="row clearfix h-100">';
    	$column = $this->columnDecorator($options);		
		if($options['column1']<12) {
			$column2 = '<div class="col-md-'.(12 - $options['column1']).' justify-content-center align-self-center '.(isset($options['no-padtop-image'])?'h-100':'').'">
							<img src="'.asset('images/').'/'.$options['image'].'" alt="magnitude image">
						</div>'. PHP_EOL;
			echo ($options['text-align'] === 'left'? $column.$column2. PHP_EOL: $column2.$column. PHP_EOL);			
		}
		else {
			echo $column. PHP_EOL;
		}				
		if(isset($options['add-on'])) {
			echo $options['add-on']. PHP_EOL;
		}				
		echo '		</div>
				</div>
			</div>
		</section>'. PHP_EOL;
	}

	/**
	 * Helper for function section()
	 * 
	 * @author emerald junn
	 * @since 15/03/2021
	 * 
	 * @version 2.0.0
	 *
	 * @param array $options
	 * @return string
	 */
	private function columnDecorator($options)
	{
		$textbig = explode('/', $options['text-big']);
		$grab = $class = "";
		$cnt = 0;
		foreach($textbig as $txt) {
			if($options['start_bold'] === true) {
				$class = ($cnt % 2 === 0?'bold':'ultralight');
			}
			else {
				$class = ($cnt % 2 === 0?'ultralight':'bold');
			}
			$grab .= '<span class="display-1 '.$class.' linepoint9">'.$txt.'</span>';
			$grab .= ($cnt<count($textbig)?"<br/>":'');
			$cnt++;
		}
		if(isset($options['text-custom'])) {
			$grab = $options['text-custom'];
		}
		$text_align  = (isset($options['text-align-custom'])?$options['text-align-custom']:($options['text-align']=='right'?'':''));
		$column = '<div class="col-md-'.$options['column1'].' '.$text_align.' justify-content-center align-self-center ">
			    '.$grab.'
				<p class="myLead myLeadAbout line-1point3">
				    '.$options['description'].'
				</p>
		          </div>'. PHP_EOL;
		return $column;
	}

	/**
	 * Clients data 
	 * 
	 * @author emerald junn
	 * @since 15/03/2021
	 * 
	 * @version 2.0.0
	 * @return string
	 */
	public function clientStyle($clients)
	{
		$x = 1;
		foreach ($clients as $key => $value) {
			echo '.clients-grid li img.i'.$x.' {'.PHP_EOL; 
			echo '		background-image: url("'.asset('images/clients/').'/'.$value.'.png") !important;'.PHP_EOL; 
			echo '				transition: .4s;'.PHP_EOL; 
			echo '	} '.PHP_EOL;
			$x++;
		}
	}

	/**
	 * Client page data 
	 * 
	 * @author emerald junn
	 * @since 15/03/2021
	 * 
	 * @version 2.0.0
	 * @return string
	 */
	public function clientSection($clients)
	{
		$x = 1;
		foreach ($clients as $key => $value) {
			if($value=="blank") {
				echo '<li class="blank" data-img="'.$value.'"><img class="client-img i'.$x.'" src="'.asset('images/clients/blank.png').'"></li>';
			}
			else {
				echo '<li data-img="'.$value.'"><img class="client-img i'.$x.'" src="'.asset('images/clients/blank.png').'"></li>';
			}
			$x++;
		}
	}

	/**
	 * Approach page data 
	 * 
	 * @author emerald junn
	 * @since 15/03/2021
	 * 
	 * @version 2.0.0
	 * @return string
	 */
	public function pageSection($page, $isMobile = true)
	{
		foreach($page as $key => $value) {
			if($isMobile === false && ( $key === 'team' || $key === 'advertising')) {
				if($key === 'team') {
					$this->pageAdvertisingTeam($page, $key);
				}
				if($key === 'advertising') {
					$this->pageAdvertisingDesktop($page, $key);
				}
			}
			else {
				if($key === 'advertising') {
					$this->pageAdvertisingMobile($page, $key);
				}
				else {
					$page[$key]['class_id'] = $page[$key]['class_id'].($isMobile?"Mobile":"Desktop");
					$page[$key]['text-align'] = ($isMobile?"left":$page[$key]['text-align']);
					$this->section($page[$key]);
				}
			}			
		}
	}

	/**
	 * Helper for function pageSection()
	 * 
	 * @author emerald junn
	 * @since 15/03/2021
	 * 
	 * @version 2.0.0
	 *
	 * @param array $page
	 * @param int|string $key
	 */
	private function pageAdvertisingMobile($page, $key)
	{
		echo '<section id="content" class="content full-screen 1m"  style="background-color:'.$page[$key]['bg-color'].'">
			<div class="content-wrap h-100" >
			<div class="container clearfix justify-content-center align-self-center h-100" style="padding:0px !important">
			<div class="row clearfix h-100"><div class="col-md-6  justify-content-center align-self-center " style="padding-left:45px; padding-right:45px">
			<span class="display-1 bold linepoint9">'.__('transcript.advertising_advertising').'</span><br/><span class="display-1 ultralight linepoint9">'.__('transcript.advertising_marketing').'</span><br/>
			<p class="myLead line-1point3">'.__('transcript.advertising_desc').'</p>
			</div>
			<div class="col-md-6 justify-content-center align-self-center " style="padding-left:100px">
			<img src="'.asset('images/').'/'.'claw2.png">
			</div>
			</div>
			</div>
			</div>
			</section>'.PHP_EOL; 
	}

	/**
	 * Helper for function pageSection()
	 * 
	 * @author emerald junn
	 * @since 15/03/2021
	 * 
	 * @version 2.0.0
	 *
	 * @param array $page
	 * @param int|string $key
	 */
	private function pageAdvertisingTeam($page, $key)
	{
		echo '<section id="content" class="content full-screen makeheightfull 5Desktop"  style="background-color:'.$page[$key]['bg-color'].'">
			<div class="content-wrap h-100" >
			<div class="container clearfix justify-content-center align-self-center h-100">
			<div class="row clearfix h-100"><div class="col-md-6  justify-content-center align-self-center ">
			<span class="display-1 ultralight linepoint9">'.__('transcript.team_weare').'</span><br/><span class="display-1 bold linepoint9">'.__('transcript.team_team').'</span><br/><span class="display-1 bold linepoint9">'.__('transcript.team_players').'</span><br/>
			<p class="myLead line-1point3">
			'.__('transcript.team_desc').'
			</p>
			</div>
			<div class="col-md-9 justify-content-center align-self-center " style="margin-left:-300px">
			<img src="'.asset('images/').'/'.$page[$key]['image'].'"><br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;<br/>&nbsp;
			</div>
			</div>
			</div>
			</div>
			</section>'.PHP_EOL; 
	}

	/**
	 * Helper for function pageSection()
	 * 
	 * @author emerald junn
	 * @since 15/03/2021
	 * 
	 * @version 2.0.0
	 *
	 * @param array $page
	 * @param int|string $key
	 */
	private function pageAdvertisingDesktop($page, $key)
	{
		echo '<section id="content" class="content full-screen makeheightfull 2Desktop"  style="background-color:'.$page[$key]['bg-color'].'">
			<div class="content-wrap h-100" style="padding:0px">
			<div class="container clearfix h-100">
			<div class="row clearfix h-100"><div class="col-md-5  h-100">
			<img src="'.asset('images/').'/'.$page[$key]['image'].'">
			</div>
			<div class="col-md-7  justify-content-center align-self-center ">
			<span class="display-1 bold linepoint9">'.__('transcript.advertising_advertising').'</span><br/><span class="display-1 ultralight linepoint9">'.__('transcript.advertising_marketing').'</span><br/>
			<p class="myLead line-1point3">
			'.__('transcript.advertising_desc').'
			</p>
			</div>
			</div>
			</div>
			</div>
			</section>'.PHP_EOL; 
	}

	/**
	 * Work page data 
	 * 
	 * @author emerald junn
	 * @since 15/03/2021
	 * 
	 * @version 2.0.0
	 * @param array $pictureToDisplay
	 */
	public function smallLightbox($pictureToDisplay, $idx)
	{
		$insertInfo = $this->insertInfo($idx);
		$numbers = range(0, count($pictureToDisplay)-1);		
		for($i=0; $i<count($numbers); $i++) 
		{
			$getPics = explode('~',$pictureToDisplay[$numbers[$i]]);
			$tmp = explode('/',$getPics[3]);
			
			$getRaw = $tmp[1];
			$title = ($getPics[0]==''?'':'data-title="'.$getPics[0].'<br/>'.$getPics[1].'"');
			echo '<article class="portfolio-item" style="padding: 0px 6px 6px 0px !important;">'. PHP_EOL;
			echo '  <div class="portfolio-image">'. PHP_EOL;
			echo '     <a href="'. $insertInfo['url'] .'">'. PHP_EOL;
			echo '        <img class="lazy" width="600" height="525" src="'.$this->url.$getPics[2].'" alt="'.$getPics[1].'">'. PHP_EOL;
			echo '     </a>'. PHP_EOL;
			echo '     <a data-lightbox="work" '.$title.' href="'.$this->url.$getPics[3].'">'. PHP_EOL;
			echo '        <div class="portfolio-overlay"  '.($getPics[0]==''?'style="background-color:rgba(0,0,0,0); !important"':'').'>'. PHP_EOL;
			echo '          <div class="portfolio-desc '.$insertInfo['css'] .'" data-image="'.$this->url.'raw/'.$getRaw.'">'. PHP_EOL;
			echo '            <h3>'.$getPics[0].'</h3>'. PHP_EOL;
			echo '            <p>'.$getPics[1].'</p>'. PHP_EOL;
			echo '        </div>'. PHP_EOL;
			echo '     </div></a>'. PHP_EOL;
			echo '  </div>'. PHP_EOL;
		    echo '</article>'. PHP_EOL; 
		}
	}
	
	private function insertInfo($idx)
	{
		$insertInfo = [
			['url' => '/work/1', 'css' => ''],
			['url' => '#', 'css' => 'portfolio-desc2'],
		];
		//portfolio-desc2
		return $insertInfo[$idx];
	}

	public function setLanguageForMobile()
	{
		$result = '';
        $cnt = $slashCounter = 1;
        $languageList = config('app.language');
        foreach($languageList as $lang) {
			$space = '';
            switch($lang) {
                case "en":
                    $wordLang = "English&nbsp;/&nbsp;";
                    break;
                case "fr":
                    $wordLang = "Français&nbsp;/&nbsp;";
                    break;
                case "ar":
                    $wordLang = "<span style='font-family:Cairo !important; font-weight:300'>العربية&nbsp;/&nbsp;</span>";
                    break;
            }
            if($cnt > 1 && $cnt < count(config('app.language')) ){
			 	//$space =  ($cnt < 2 ? '&nbsp;/&nbsp;':'');
				 $space = '&nbsp;/&nbsp;';
				$slashCounter++; 
			}
            if(app()->getLocale() != $lang) {
                $result .= '<a href="/locale/'.strtolower($lang).'" style="color: #BBB;">'. $wordLang . '</a>';
            }
            $cnt++;			
        }
		echo $result = substr($result, 0, app()->getLocale() === 'ar'? -17 : -18 );
	}
}
