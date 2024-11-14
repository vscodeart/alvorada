<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\HeaderSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{
    public function index()
    {
        $headerSettings = HeaderSetting::where('slug', 'blog')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('blog.index', [
            'blogs' => $blogs
        ]);
    }

    public function full(Request $request, $slug)
    {
        $headerSettings = HeaderSetting::where('slug', 'blog')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $model = Blog::where('slug', $slug)->first();

        return view('blog.full', [
            'model' => $model->translate('locale', session()->get('locale'))
        ]);
    }
}
