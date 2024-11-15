<?php

namespace App\Http\Controllers;

use App\Models\HeaderSetting;
use App\Models\SeoSetting;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class WhoWeAreController extends Controller
{
    public function index()
    {

        $headerSettings = HeaderSetting::where('slug', 'who-we-are')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $whoWeAreModel = WhoWeAre::with('children')->where('parent_id','=',null)->first();
        $seoSettings = SeoSetting::where('slug','who-we-are')->first();
        View::share('meta_seo', $seoSettings ?? '');


        View::share('meta_seo', $seoSettings ?? '');
        return view('who-we-are',[
            'whoWeAre' => $whoWeAreModel->translate('locale', session()->get('locale'))
        ]);
    }
}
