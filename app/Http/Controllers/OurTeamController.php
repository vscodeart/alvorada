<?php

namespace App\Http\Controllers;

use App\Models\HeaderSetting;
use App\Models\OurTeam;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class OurTeamController extends Controller
{
    public function index()
    {
        $headerSettings = HeaderSetting::where('slug', 'our-team')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $ourTeams = OurTeam::orderBy('created_at', 'desc')->get();
        $seoSettings = SeoSetting::where('slug','our-team')->first();
        View::share('meta_seo', $seoSettings ?? '');
        return view('our-team', [
            'ourTeams' => $ourTeams
        ]);
    }
}
