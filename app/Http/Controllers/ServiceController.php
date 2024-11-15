<?php

namespace App\Http\Controllers;

use App\Models\HeaderSetting;
use App\Models\SeoSetting;
use App\Models\Service;
use http\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use PHPUnit\Runner\ErrorException;


class ServiceController extends Controller
{
    public function index()
    {
        $headerSettings = HeaderSetting::where('slug', 'service')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));

        $services = Service::with('children')->where('parent_id', '=', null)->get();
        $seoSettings = SeoSetting::where('slug', 'services')->first();
        View::share('meta_seo', $seoSettings ?? '');
        return view('services.index', [
            'services' => $services
        ]);
    }

    public function children(Request $request, $slug = null)
    {

        $headerSettings = Service::where('slug', $slug)->first();

        if (!$headerSettings) {
            $headerSettings = HeaderSetting::where('slug', '404')->first();
            View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
            return \view('error.404');
        }
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $serviceChildren = Service::with('children')->where('slug', $slug)->first();

        $firstChildren = $serviceChildren->children()->with('children')->first();




//        SEO START
        $seoSettings = SeoSetting::where('slug', 'services')->first();
        $meta_seo = collect();

        if ($serviceChildren->meta_keywords == '') {
            $meta_seo->meta_keywords = strip_tags($serviceChildren->content) != '' ? implode(',', explode(' ', \Illuminate\Support\Str::limit(strip_tags($serviceChildren->content)))) : $seoSettings->meta_keywords;
        } else {
            $meta_seo->meta_keywords =  $serviceChildren->meta_keywords;
        }

        if ($serviceChildren->meta_title == '') {
            $meta_seo->meta_title = $serviceChildren->name;
        } else {
            $meta_seo->meta_title = $serviceChildren->meta_title ?? $seoSettings->meta_title;
        }

        if ($serviceChildren->meta_description == '') {
            $meta_seo->meta_description =  Str::limit(strip_tags($serviceChildren->content), 150, $end = '') != '' ? Str::limit(strip_tags($serviceChildren->content), 150, $end = '') : $seoSettings->meta_description;
        } else {
            $meta_seo->meta_description = $serviceChildren->meta_description ?? $seoSettings->meta_description;
        }

        if ($serviceChildren->header_image != '') {
            $meta_seo->meta_image = $serviceChildren->header_image;
        }else{
            $meta_seo->meta_image = $seoSettings->meta_image;
        }


        View::share('meta_seo', $meta_seo ?? '');
// SEO END
        return view('services.children', [
            'serviceChildren' => $serviceChildren,
            'firstChildren' => $firstChildren
        ]);
    }

    public function getSubChilds(Request $request, $slug, $subSlug = null)
    {
        $headerSettings = Service::where('slug', $slug)->first();

        if (!$headerSettings) {
            $headerSettings = HeaderSetting::where('slug', '404')->first();
            View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
            return \view('error.404');
        }


        $serviceChildren = Service::with('children')->where('slug', $slug)->first();


        if (!$serviceChildren) {
            $headerSettings = HeaderSetting::where('slug', '404')->first();
            View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
            return \view('error.404');
        }
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));

        $firstChildren = $serviceChildren->children()->with('children')->where('slug', $subSlug)->first();
        if (!$firstChildren) {
            $headerSettings = HeaderSetting::where('slug', '404')->first();
            View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
            return \view('error.404');
        }



//        SEO START
        $seoSettings = SeoSetting::where('slug', 'services')->first();
        $meta_seo = collect();

        if ($firstChildren->meta_keywords == '') {
            $meta_seo->meta_keywords = strip_tags($firstChildren->content) != '' ? implode(',', explode(' ', \Illuminate\Support\Str::limit(strip_tags($firstChildren->content)))) : $seoSettings->meta_keywords;
        } else {
            $meta_seo->meta_keywords =  $firstChildren->meta_keywords;
        }

        if ($firstChildren->meta_title == '') {
            $meta_seo->meta_title = $firstChildren->name;
        } else {
            $meta_seo->meta_title = $firstChildren->meta_title ?? $seoSettings->meta_title;
        }

        if ($firstChildren->meta_description == '') {
            $meta_seo->meta_description =  Str::limit(strip_tags($firstChildren->content), 150, $end = '') != '' ? Str::limit(strip_tags($firstChildren->content), 150, $end = '') : $seoSettings->meta_description;
        } else {
            $meta_seo->meta_description = $firstChildren->meta_description ?? $seoSettings->meta_description;
        }

        if ($firstChildren->header_image != '') {
            $meta_seo->meta_image = $firstChildren->header_image;
        }else{
            $meta_seo->meta_image = $seoSettings->meta_image;
        }


        View::share('meta_seo', $meta_seo ?? '');
// SEO END


        return view('services.children', [
            'serviceChildren' => $serviceChildren,
            'subSlug' => $subSlug,
            'firstChildren' => $firstChildren
        ]);
    }


}
