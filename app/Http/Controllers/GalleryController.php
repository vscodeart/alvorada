<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\HeaderSetting;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GalleryController extends Controller
{
    public function index()
    {
        $headerSettings = HeaderSetting::where('slug', 'gallery')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $galleries = Gallery::query()->orderBy('created_at')->get();
        $seoSettings = SeoSetting::where('slug','gallery')->first();
        View::share('meta_seo', $seoSettings ?? '');
        return \view('gallery', [
            'galleries' => $galleries
        ]);
    }
}
