<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Cpage;
use App\Models\Contact;
use App\Models\Admin;
use Session;
use Mail;    // import for send mail

class BaseController extends Controller
{
	//Home page method
    public function home()
    {
        $page = Page::where('page_title','home')->orwhere('page_title','settings')->get();
        
        $numrow = count($page);
        if($numrow > 0)
        {
            return view('frontend.home',['page'=>$page]);
        }
        else
        {
            $page = new Page();
            return view('frontend.home',['page'=>$page]);
        }
    }
    // services page method
    public function services()
    {
        $page = Page::where('page_title','service')->orwhere('page_title','settings')->orwhere('page_title','widget')->get();
        $numrow = count($page);
        if($numrow > 0)
        {
            return view('frontend.services',['page'=>$page]);
        }
        else
        {
            $page = new Page();
            return view('frontend.services',['page'=>$page]);
        }
    }
    // inspection page method
    public function inspections()
    {
        $page = Page::where('page_title','inspection')->orwhere('page_title','settings')->orwhere('page_title','widget')->get();
        
        $numrow = count($page);
        if($numrow > 0)
        {
            return view('frontend.inspections',['page'=>$page]);
        }
        else
        {
            $page = new Page();
            return view('frontend.inspections',['page'=>$page]);
        }
    }

    // affiliations page method
    public function affiliations()
    {
         $page = Page::where('page_title','affiliation')->orwhere('page_title','settings')->orwhere('page_title','widget')->get();
        
        $numrow = count($page);
        if($numrow > 0)
        {
            return view('frontend.affiliations',['page'=>$page]);
        }
        else
        {
            $page = new Page();
            return view('frontend.affiliations',['page'=>$page]);
        }
    }

    //about page method
    public function about()
    {
          $page = Page::where('page_title','about-page')->orwhere('page_title','settings')->orwhere('page_title','widget')->get();
        
        $numrow = count($page);
        if($numrow > 0)
        {
            return view('frontend.about',['page'=>$page]);
        }
        else
        {
            $page = new Page();
            return view('frontend.about',['page'=>$page]);
        }
    }
    // contact page method
    public function contact()
    {
        $page = Page::where('page_title','contact-page')->orwhere('page_title','settings')->orwhere('page_title','widget')->get();
        $cpages = Cpage::get();
        $numrow = count($page);
        if($numrow > 0)
        {
            return view('frontend.contact',['page'=>$page,'cpages'=>$cpages]);
        }
        else
        {
            $page = new Page();
            return view('frontend.contact',['page'=>$page,'cpages'=>$cpages]);
        }
    }
    
public function storeContactForm(Request $request)

    {

        $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'phone' => 'required|digits:10|numeric',

            'subject' => 'required',

            'usermessage' => 'required',

        ]);


        $input = $request->all();
        
        //dd($input);
        $page = Page::where('section_title','admin_email')->get();
        $admin_email =  $page[0]->data;
        Contact::create($input); //save into db

      Mail::send('email.contact', $input, function($message) use($admin_email)
        {
            $message->to($admin_email, 'Admin')->subject('Contact');
        });
           
        return redirect()->back()->with(['success' => 'Thank You, Message Sent.']);

    }

   

}
