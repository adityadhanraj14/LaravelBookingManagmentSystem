<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Bookings;
use App\Models\Webpage;
use Illuminate\Support\Facades\Auth;

class Webpagecontroller extends Controller
{
    public function index(){        
        // $data= WebPage::where('status',1)->get();
        $data = WebPage::all();
        return view('AdminDashboard.WebPage.index',['data'=>$data]);
    }

    public function add(){
        return view('AdminDashboard.WebPage.addEdit');
    }

    public function save(Request $request){
        $page = new WebPage ([
            'name'=>$request->get('page_name'),
            'slug'=>$request->get('page_slug'),
            'html'=>$request->get('page_content'),
            'status'=>$request->get('page_status'),
            'created_by'=>Auth::user()->user_type,         
        ]);
        $page->save();
        return redirect()->route('webpage.index');
    }

    public function edit($id){
        $data = WebPage::find($id);
        return view('AdminDashboard.WebPage.addEdit',['data'=>$data]);

    }

    public function update(Request $request,$id){
        $page = WebPage::find($id);           
        $page->name = $request->get('page_name');
        $page->slug = $request->get('page_slug');
        $page->html = $request->get('page_content');
        $page->status =  $request->get('page_status');
        $page->updated_by =Auth::user()->id;
        $page->save();
        return redirect()->route('webpage.index');
    }

    public function viewDelete($id){
        return view('AdminDashboard.WebPage.delete');

    }

    public function delete($id){
        WebPage::where('id',$id)->delete();
        return redirect()->route('webpage.index');
    }

    public function landing(){
        return view('index');
    }

    public function viewpage($page){
        $data = WebPage::where('slug',$page)->first();
        return view('dynamic',['data'=>$data]);

    }
}
