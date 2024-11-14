<?php

namespace App\Http\Controllers;


use App\Mail\SendMail;
use App\Models\Contact;
use App\Models\ContactForm;
use App\Models\HeaderSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    public function index()
    {

        $headerSettings = HeaderSetting::where('slug','contact')->first();
        View::share('headerSettings', $headerSettings->translate('locale', session()->get('locale')));
        $contactModel = Contact::orderBy('created_at', 'desc')->first();

        return view('contact',[
            'contact' => $contactModel->translate('locale', session()->get('locale'))
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            "name" => 'required',
            "service" => 'required',
            "phone_number" =>'required',
            "message" => 'required',
        ]);

        $model  = ContactForm::create($request->all());
        $req = $request->except('_token');
        $template =  'default';
        $mail = Mail::to(env('SITE_EMAIL'))->send(new SendMail($req, $template,__('Contact Form')));
        if($model && $mail){
            return redirect()->back()->with(['success' => __('Form Submitted Successfully')]);
        }
        return redirect()->back()->with(['error' => __('Something happened, please try again or contact to site administrator!')]);
    }
}
