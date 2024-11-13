<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {

        $headerText = Home::orderBy('id', 'desc')->first();
        View::share('headerText', $headerText->translate('locale', session()->get('locale')));

        return view('home');
    }
}
