<?php
namespace App\Helper;
use Illuminate\Http\Request;
use App\Helper\DataArrays;
/**
 * Additional functions for site
 */
trait Helper
{
    use DataArrays;
    /**
     * Session sequence for image swapping in Landing Page
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     *
     * @param Illuminate\Http\Request $req
     * @return int
     */
    private $description = 'Magnitude is a full-service communications agency, staffed by a multidisciplinary team of talented and passionate individuals working together to meet and exceed clients’ expectations. We offer impact, peace of mind and results through a multitude of valuable services, from concept to reality and everything in between.';
    private function swapImageValue($req)
    {
        if($req->session()->has('seq')) {
            if($req->session()->get('seq') === 2){
				$req->session()->put('seq', 0);
			}
			else { 
				$req->session()->put('seq', ($req->session()->get('seq') ?? 0) + 1);
			}
        }
        else {
            $req->session()->put('seq', $req->session()->get('seq')+1);
        }
        return $req->session()->get('seq');
    }
    /**
     * Configuration of Landing Page
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     *
     * @param integer $num
     * @return array
     */
    private function paramConfig(int $num)
    {  
        $frontend_config = [
            'bg' => ['#174154', '#7c2d4a', '#58595b'],
            'img' => ['gloves2.png', 'bilyard_ball.png', 'engine.png'],
            'align' => ['left', 'right', 'left'],
            
        ];
        $options = [
			'bg-color'=> $frontend_config['bg'][$num],
			'class_id' => '0',
			'text-align'=> $frontend_config['align'][$num],
			'text-align-custom' => 'text-center',
			'description' => '',
			'text-big'=>'Create an <span class="display-3 bold magnitude_green">Impact<span>',
			'text-custom' => '<span class="display-3 ultralight">Create an <span class="display-3 bold magnitude_green">Impact<span>',
			'column1' => 6,
			'start_bold' => false,
			'image' => $frontend_config['img'][$num],
			'add-on1' => '<a href="#" data-scrollto=".1" data-offset="0" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>'
		];
        $other_config = [
            'background-color' => $frontend_config['bg'][$num],
            'isTry' => true,
            'description' => $this->description
        ];

        return [
            'frontend_config' =>  $frontend_config,
            'options' => $options,
            'other_config' => $other_config
        ];
    }
    /**
     * Configuration of About Page
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     * @return array
     */
    private function paramAbout()
    { 
        $frontend_config = [
            'isAbout' => true,            
            'title'=>__('transcript.about'),
			'description'=> __('transcript.about_description'),
			'title2' => __('transcript.about_worktitle'),
    		'description2'=> __('transcript.about_work'),
            'approach'=>
				[
				'bg-color'=>'#41A69E',
				'class_id' => '1',
				'text-align'=>'left',
				'description' => __('transcript.about_description'),
				'text-big'=>'ABOUT',
				'column1' => 12,
				'start_bold' => true,
				'header-class'=>'screen-size',
				'image' => '',
				'add-on' => '<a href="#" data-scrollto=".team_page1" data-offset="0" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>'
				]
        ];
        $other_config = [
            'background-color' => '#41A69E',
            'isTry' => true,
            'description' => $this->description
        ];

        return [
            'frontend_config' =>  $frontend_config,
            'other_config' => $other_config
        ];

    }
    /**
     * Configuration of Contact Page
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     * @return array
     */
    private function paramContact()
    {
        $frontend_config = [
            'isContact' => true,    
            'background-color' => "#543099",
            'contact' => ['mobile' =>
			                __('transcript.contact_mobile'),
			            'desktop' =>
			                __('transcript.contact_desktop')
                        ],
            'pageView' => [
                'title'=> __('transcript.contact'),
			    'description'=> __('transcript.contact_desc')
                        ],
            'description' =>  "Emarat Atrium, Office  401, Sheikh Zayed Road, P.O. Box 334547, Dubai, United Arab Emirates - Tel: +971 4 338 7742 - Fax: +971 4 338 7746 - Email: info@magnitude.ae"           
        ];
		return [
            'frontend_config' => $frontend_config,
            'other_config' => [
                'description' => $this->description
            ]
        ];   	
    }
    /**
     * Configuration of Client Page
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     * @return array
     */
    private function paramClients()
    {
        $frontend_config = [
            'isClients' => true,
            'background-color' => "#9263cd",
            'pageView' => [
                'title'=>__('transcript.clients'),
                'description'=>__('transcript.client_desc')],
            'clients' => $this->clientsArray(),
            'DESCRIPTION' => __('transcript.client_desc')    
        ];
        return [
            'frontend_config' => $frontend_config,
            'other_config' => ['description' => $this->description],
        ];
    }
    /**
     * Configuration of Approach Page
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     * @return array
     */
    private function paramApproach()
    {
        $frontend_config = [
            'isApproach' => true,
            'background-color' => '#59595c',
            'description' => 'From concept to reality. - We are committed to you - We listen and get to know you - We love what we do - We are team players - We are honest - We live for the impact',
            'approach' => $this->approachArray(),
        ];
        		
        return [
            'frontend_config' => $frontend_config,
            'other_config' => ['description' => $this->description],
        ];
   
    }
    /**
     * Configuration of Expertise Page
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     * @return array
     */
    private function paramExpertise()
    {
        $frontend_config = [
            'isExpertise' => true,
            'background-color' => '#174154',
            'description' => 'Advertising & Marketing - Creative Design & Branding - Online & Digital - Events & Exhibitions',
            'expertise' => $this->expertiseArray(),
        ];
        
        return [
            'frontend_config' => $frontend_config,
            'other_config' => ['description' => $this->description],
        ];

    }
    /**
     * Configuration of Feed Page
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     * @return array
     */
    private function paramFeeds()
    {
        $frontend_config = [
            'isFeeds' => true,
            'background-color' => '#ff672e',
            'description' => 'Instagram@magnitude.ae #CreateAnImpact',
            'title' => __('transcript.feeds'),
        ];
        
        return [
            'frontend_config' => $frontend_config,
            'other_config' => ['description' => $this->description],
        ];
    }
    /**
     * Configuration of Work Page
     * 
     * @author emerald junn <emeraldjunn@gmail.com>
     * @param int $page
     * @return array
     */
    private function paramWork($page)
    {
        $work = $this->workArray();
		$seed = 12;
		$cnt = ceil(count($work)/$seed);
		$pageNum = $page;	
		if($pageNum !== $cnt) {
			$beg = (($pageNum-1) * $seed);
			$end = $seed;
		}
		else {
			$beg = (($pageNum-1) * $seed);
			$end = (count($work)) - ($pageNum * ($seed-1));
		}
		$perPageView = array_slice($work, $beg, $end);
		
        $frontend_config = [
            'isWork' => true,
            'background-color' => '#d53156',
            'description' => 'Instagram@magnitude.ae #CreateAnImpact',
            'title' => __('transcript.feeds'),
            'pageView' => [
                'title'=> __('transcript.work'),
                'description'=>__('transcript.work_desc')],
            'sign' => "{{#}}",
            'perPageView' => $perPageView,
            'page' => $pageNum

        ];
        return [
            'frontend_config' => $frontend_config,
            'other_config' => ['description' => $this->description],
        ];
    }
}