<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Gallery;
use App\Models\HeaderSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BrandController extends Controller
{
   public function index()
   {
       $headerSettings = HeaderSetting::where('slug', 'brand-we-trust')->first();
       View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
       $brands = Brand::query()->orderBy('created_at')->get();
       return \view('brands', [
           'brands' => $brands
       ]);
   }
}
