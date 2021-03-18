<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Helper\Helper;
use App\Models\Blog;
/**
 * @property \App\Components\ComponentLoader $componentLoader Description
 */
class MagnitudeController extends Controller
{
    use Helper;
    public function index(Request $request)
    {        
        $seq = $this->swapImageValue($request);
        $siteData = $this->paramConfig($seq);
        return view('index', compact('siteData'));
    }
    public function about()
    {
        $siteData = $this->paramAbout();
        return view('about', compact('siteData'));
    }
    public function work($page)
    {
        $siteData = $this->paramWork($page);
        return view('work', compact('siteData'));
    }
    public function clients()
    {
        $siteData = $this->paramClients();
        return view('clients', compact('siteData'));
    }
    public function approach()
    {
        $siteData = $this->paramApproach();
        return view('approach', compact('siteData'));
    }
    public function expertise()
    {
        $siteData = $this->paramExpertise();
        return view('expertise', compact('siteData'));
    }
    public function feeds()
    {
        $blog = Blog::where('live',1)->orderBy('created','desc')->get();
        $siteData = $this->paramFeeds();
        return view('feeds', compact('siteData', 'blog'));
    }
    public function contact()
    {
        $siteData = $this->paramContact();
        return view('contact', compact('siteData'));        
    }
}
