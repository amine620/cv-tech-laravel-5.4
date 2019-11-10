<?php

namespace App\Http\Controllers;
use App\Cv;
use auth;

use Illuminate\Http\Request;
use App\Http\Requests\Cvrequest;
use Illuminate\Http\UploadedFile;
class CvController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->is_admin)
        {
            $cvlist=Cv::all();
            return view('cv.index',['cvs'=> $cvlist]);

        }
        else{
            $cvlist=Auth::user()->cvs;
            return view('cv.adminControlPanel',['cvs'=>$cvlist]);

        }
    }
    public function create()
    {
        return view('cv.create');
    }
    public function store(Cvrequest $request)
    {
        $cv=new Cv();
        $cv->titre=$request->input('titre');
        $cv->presentation=$request->input('presentation');
        $cv->user_id=auth::user()->id;
      if($request->hasFile('photo')) 
      {
         
            $cv->photo=$request->photo->store('image');
          
      }   
        
         $cv->save();
         session()->flash('add','the operation it done successfully');
         return redirect('cvs');



    }
    
    
    public function edit($id)
    {
        $ed=Cv::find($id);
        $this->authorize('update',$ed);
       
        return view('cv.edit',['cvs'=>$ed]);
        
    }
    public function update($id,Cvrequest $request)
    {
        $up=Cv::find($id);
        $up->titre=$request->input('titre');
        $up->presentation=$request->input('presentation');
        $up->photo=$request->photo->store('image');
        $up->save();
        session()->flash('update','the item was updated successfully');
        return redirect('cvs');


        
    }
    public function delete_modal($id)
    {
        $itemdel=Cv::find($id);
        return view('cv.delete_modal',['itemdel'=> $itemdel]);

    }
    public function destroy($id)
    {
        $ed=Cv::find($id);
        $this->authorize('delete',$ed);
        $ed->delete();
        session()->flash('delete','the item was deleted successfully');
        return redirect('cvs');


    }
    public function details($id)
    {
        $cv=Cv::find($id);
        return view('cv.details',['cvs'=>$cv]);

    }
    public function redirect_page($id)
    {
        return redirect('cvs');
    }
    
}
