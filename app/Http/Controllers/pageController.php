<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\{Admin,Cpage};

class pageController extends Controller
{

    public function CreatePage(Request $request)
    {	
    	$pagevalues['ptitle'] = $request->ptitle;
    	$datavalues = array();
    	if($request->text_name)
    	{

    		$field = $request->text_name;

    		if($field)
    		{
    			for($j=0; $j<count($field);$j++)
    			{
    				$text  =  $field[$j];

    				$tx = $request->$text;
    				$field_name = Page::where(['section_title' => $text, 'page_title' => $pagevalues['ptitle']])->get();

    				if(count($field_name) > 0)
    				{
    					$datavalues[$text] = $tx;
    				}
    				else
    				{
    					$newvalues[$text] = $tx;
    				}
    			}
    		}
    	}
   

    	//image upload code insert
    	if($request->image)
    	{
    		$field = $request->image;
    		if($field)
    		{
    			for($j=0; $j<count($field);$j++)
    			{
    				$image_name  =  $field[$j];

    				if($request->$image_name){
    					$filename = $this->fileUpload($request,$image_name,'');
    					//fileUpload Method define in controller.php 
    					$field_name = Page::where(['section_title' => $image_name, 'page_title' => $pagevalues['ptitle']])->get();
    				if(count($field_name) > 0)
    				{
    					$datavalues[$image_name] = $filename;
    				}
    				else
    				{
    					$newvalues[$image_name] = $filename;
    				}
					}
    			}
    		}

    	}
    	if(!empty($datavalues))
    	{
    		foreach ($datavalues as $key => $value) {
    			$where = array('section_title' => $key, 'page_title' => $pagevalues['ptitle']);
    			$res = Page::where($where)->update(array('data'=>$value));
    			if($res)
    			{
    				$success = 1;
    			}
    		}
    	}
    	if(!empty($newvalues))
    	{
    		foreach ($newvalues as $key => $value) {
    			$data = array(
    				'page_title' => $pagevalues['ptitle'], 
    				'section_title' => $key,
    				'data' => $newvalues[$key]

    						);

    			$res = Page::create($data);

    		}	
    	}
    	if($pagevalues['ptitle'] == "service")
    	{
    		return redirect('service');	
    	}
    	else if($pagevalues['ptitle'] == "home")
    	{
    		return redirect('home');
    	}
    	else if($pagevalues['ptitle'] == "inspection")
    	{
    		return redirect('inspection');
    	}
    	else if($pagevalues['ptitle'] == "affiliation")
    	{
    		return redirect('affiliation');
    	}
    	else if($pagevalues['ptitle'] == "about-page")
    	{
    		return redirect('about-page');
    	}
    	else if($pagevalues['ptitle'] == "contact-page")
    	{
    		return redirect('contact-page');
    	}
    	else if($pagevalues['ptitle'] == "widget")
    	{
    		return redirect('widget');
    	}
    	else if($pagevalues['ptitle'] == "settings")
    	{
    		return redirect('settings');
    	}
    	
    }

//add Home method
    public function addPage(Request $request)
    {
    	$page = Page::where('page_title','home')->get();
    	
    	$numrow = count($page);
    	if($numrow > 0)
    	{
    		return view('admin.pages.addPage',['page'=>$page]);
    	}
    	else
    	{
    		$page = new Page();
    		return view('admin.pages.addPage',['page'=>$page]);
    	}
    }

    public function service(Request $request)
    {
    	$page = Page::where('page_title','service')->get();
    	
    	$numrow = count($page);
    	if($numrow > 0)
    	{
    		return view('admin.pages.service',['page'=>$page]);
    	}
    	else
    	{
    		$page = new Page();
    		return view('admin.pages.service',['page'=>$page]);
    	}
    }

    public function inspection(Request $request)
    {
    	$page = Page::where('page_title','inspection')->get();
    	
    	$numrow = count($page);
    	if($numrow > 0)
    	{
    		return view('admin.pages.inspection',['page'=>$page]);
    	}
    	else
    	{
    		$page = new Page();
    		return view('admin.pages.inspection',['page'=>$page]);
    	}
    }

       public function affiliation(Request $request)
    {
    	$page = Page::where('page_title','affiliation')->get();
    	
    	$numrow = count($page);
    	if($numrow > 0)
    	{
    		return view('admin.pages.affiliation',['page'=>$page]);
    	}
    	else
    	{
    		$page = new Page();
    		return view('admin.pages.affiliation',['page'=>$page]);
    	}
    }

      public function about(Request $request)
    {
    	$page = Page::where('page_title','about-page')->get();
    	
    	$numrow = count($page);
    	if($numrow > 0)
    	{
    		return view('admin.pages.about',['page'=>$page]);
    	}
    	else
    	{
    		$page = new Page();
    		return view('admin.pages.about',['page'=>$page]);
    	}
    }

    public function contact(Request $request)
    {
    	$page = Page::where('page_title','contact-page')->get();
    	$contact = Cpage::get();
    	$numrow = count($page);
    	if($numrow > 0)
    	{
    		return view('admin.pages.contact',['page'=>$page,'contact'=>$contact]);
    	}
    	else
    	{
    		$page = new Page();
    		return view('admin.pages.contact',['page'=>$page,'contact'=>$contact]);
    	}
    }

    public function right(Request $request)
    {
    	$page = Page::where('page_title','widget')->get();
    	
    	$numrow = count($page);
    	if($numrow > 0)
    	{
    		return view('admin.pages.rightside',['page'=>$page]);
    	}
    	else
    	{
    		$page = new Page();
    		return view('admin.pages.rightside',['page'=>$page]);
    	}
    }

    public function settings(Request $request)
    {
    	$page = Page::where('page_title','settings')->get();
    	
    	$numrow = count($page);
    	if($numrow > 0)
    	{
    		return view('admin.pages.settings',['page'=>$page]);
    	}
    	else
    	{
    		$page = new Page();
    		return view('admin.pages.settings',['page'=>$page]);
    	}
    }

    public function changePassword()

    {

        return view('admin.pages.changepwd');

    } 

    public function pwdChange(Request $request)

    {

        $request->validate([

            'current_password' => ['required', new MatchOldPassword],
			'new_password' => ['required'],
			'new_confirm_password' => ['same:new_password'],

        ]);
		Admin::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
		return redirect('/changepassword')->with('message', 'Password Changed Successfully !');

    }


}
