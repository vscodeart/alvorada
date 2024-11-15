<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\SeoSetting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public string $locale;

    public function __construct()
    {

        if (session()->get('locale') == null) {
            App::setLocale('ge');
            session()->put('locale', 'ge');
            $this->locale = 'ge';
        }

        $this->locale = session()->get('locale');
        View::share('locale', $this->locale);

        $seoSettings = SeoSetting::where('slug','default')->first();
        View::share('meta_seo', $seoSettings ?? '');



    }
}
