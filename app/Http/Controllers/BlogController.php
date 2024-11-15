<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\HeaderSetting;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $headerSettings = HeaderSetting::where('slug', 'blog')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $seoSettings = SeoSetting::where('slug','blog')->first();
        View::share('meta_seo', $seoSettings ?? '');
        return view('blog.index', [
            'blogs' => $blogs
        ]);
    }

    public function full(Request $request, $slug)
    {
        $headerSettings = HeaderSetting::where('slug', 'blog')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $model = Blog::where('slug', $slug)->first();



        //        SEO START
        $seoSettings = SeoSetting::where('slug', 'services')->first();
        $meta_seo = collect();

        if ($model->meta_keywords == '') {
            $meta_seo->meta_keywords = strip_tags($model->content) != '' ? implode(',', explode(' ', \Illuminate\Support\Str::limit(strip_tags($model->content)))) : $seoSettings->meta_keywords;
        } else {
            $meta_seo->meta_keywords =  $model->meta_keywords;
        }

        if ($model->meta_title == '') {
            $meta_seo->meta_title = $model->name;
        } else {
            $meta_seo->meta_title = $model->meta_title ?? $seoSettings->meta_title;
        }

        if ($model->meta_description == '') {
            $meta_seo->meta_description =  Str::limit(strip_tags($model->content), 150, $end = '') != '' ? Str::limit(strip_tags($model->content), 150, $end = '') : $seoSettings->meta_description;
        } else {
            $meta_seo->meta_description = $model->meta_description ?? $seoSettings->meta_description;
        }

        if ($model->image != '') {
            $meta_seo->meta_image = $model->image;
        }else{
            $meta_seo->meta_image = $seoSettings->meta_image;
        }


        View::share('meta_seo', $meta_seo ?? '');
// SEO END


        return view('blog.full', [
            'model' => $model->translate('locale', session()->get('locale'))
        ]);
    }
}
