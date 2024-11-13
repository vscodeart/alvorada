<?php

namespace App\Http\Controllers;

use App\Models\HeaderSetting;
use App\Models\Home;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {

        $headerSettings = HeaderSetting::where('slug','home')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $whoWeAreModel = WhoWeAre::with('children')->where('parent_id','=',null)->first();

        return view('home',[
            'whoWeAre' => $whoWeAreModel->translate('locale', session()->get('locale'))
        ]);
    }
}
