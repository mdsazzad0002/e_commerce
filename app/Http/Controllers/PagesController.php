<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use App\Models\ReturnPolicy;
use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\ShippingPolicy;

class PagesController extends Controller
{
    public function about()
    {
       
        return view('website.pages.about');
    }

    public function purchaseGuide()
    {
        return view('website.pages.purchase-guide');
    }

    public function termsCondition()
    {
        return view('website.pages.terms-condition');
    }

    public function shippingPolicy()
    {
        $data= ShippingPolicy::latest()->first();
        return view('website.pages.shipping-policy',compact('data'));
    }

    public function returnPolicy()
    {
       $data= ReturnPolicy::latest()->first();
        return view('website.pages.return-policy',compact('data'));
    }

    public function contact()
    {
        $info=Setting::latest()->first();
        return view('website.pages.contact',[
            'data'=>$info,
        ]);
    }
    
    public function faq(){
        
        $faqs=Faq::latest()->get();
        return view('website.pages.faq',compact('faqs'));
    }

    public function privacy_policy(){

        $data= PrivacyPolicy::latest()->first();
        return view('website.pages.privecy_policy',compact('data'));
    }

}
