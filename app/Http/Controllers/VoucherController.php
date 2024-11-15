<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\HeaderSetting;
use App\Models\SeoSetting;
use App\Models\VauchersCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class VoucherController extends Controller
{
    public function index()
    {
        $headerSettings = HeaderSetting::where('slug', 'vouchers-and-promotions')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $vouchercategories = VauchersCategory::with('vouchers')->orderBy('id')->get();
        $seoSettings = SeoSetting::where('slug','vouchers')->first();
        View::share('meta_seo', $seoSettings ?? '');
        return \view('voucher',[
            'vouchercategories' => $vouchercategories
        ]);

    }
}
