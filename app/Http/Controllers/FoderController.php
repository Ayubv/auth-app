<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Foder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
//use Illuminate\Contracts\Validation\Rule;

class FoderController extends Controller
{
    public function index()
    {   $users=new User();
        $foders = Foder::latest()->get();
        return view('foders.index',compact('foders','users'));
        // $foders= Foder::leftJoin('users','users.id','=','foders.user_id')
        // ->select(
        //     'foders.*',
        //     'users.name as user_id'
        // )
        // ->latest()->paginate(10);


     
    } 
    
    public function createFoder()
    {
       
        $users= User::all();
        $foders= Foder::select('id','name')->get();
        return view('foders.create',compact('users','foders'));
         
    }

    public function storeFoder(Request $request)
    {
        //return $request;
      
       $request->validate([
            'name'=>'required',
            'sell'=>'required',
            'eat'=>'required',
            'user_id'=>'required'
           
       ]);
       
      
       
       $foders= new Foder();
       $foders->name=$request->name;
       $foders->sell=$request->sell;
       $foders->eat=$request->eat;
       $foders->user_id=$request->user_id;
       $foders->save();
       Session::flash('msg','Data insert successfully...');
       return redirect('/foders/index');

    }

}
