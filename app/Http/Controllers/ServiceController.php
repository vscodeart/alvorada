<?php

namespace App\Http\Controllers;

use App\Models\HeaderSetting;
use App\Models\Service;
use http\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use PHPUnit\Runner\ErrorException;

class ServiceController extends Controller
{
    public function index()
    {
        $headerSettings = HeaderSetting::where('slug', 'service')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));

        $services = Service::with('children')->where('parent_id', '=', null)->get();

        return view('services.index', [
            'services' => $services
        ]);
    }

    public function children(Request $request, $slug = null)
    {

            $headerSettings = Service::where('slug', $slug)->first();

            if(!$headerSettings){
                $headerSettings = HeaderSetting::where('slug', '404')->first();
                View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
                return \view('error.404');
            }
            View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
            $serviceChildren = Service::with('children')->where('slug', $slug)->first();



        return view('services.children',[
            'serviceChildren' => $serviceChildren,
            'firstChildren' => $serviceChildren->children()->with('children')->first()
        ]);
    }

    public function getSubChilds(Request $request, $slug, $subSlug=null)
    {
        $headerSettings = Service::where('slug', $slug)->first();

        if(!$headerSettings){
            $headerSettings = HeaderSetting::where('slug', '404')->first();
            View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
            return \view('error.404');
        }


        $serviceChildren = Service::with('children')->where('slug', $slug)->first();


        if(!$serviceChildren){
            $headerSettings = HeaderSetting::where('slug', '404')->first();
            View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
            return \view('error.404');
        }
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));

        $firstChildren = $serviceChildren->children()->with('children')->where('slug', $subSlug)->first();
        if(!$firstChildren){
            $headerSettings = HeaderSetting::where('slug', '404')->first();
            View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
            return \view('error.404');
        }
        return view('services.children',[
            'serviceChildren' => $serviceChildren,
            'subSlug' => $subSlug,
            'firstChildren' => $firstChildren
        ]);
    }
}
