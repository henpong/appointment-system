<?php

namespace App\Http\Controllers\Appoint;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //Redirect to Index Page
    public function index(){

        $metaTitle = "APPOINTMENT SYSTEM";

        return view('layouts.front.index')->with(compact('metaTitle'));
    }



    public function submitApp(Request $request){
        if($request->isMethod('post')){

            $data = $request->all();
            
            echo "<pre>"; print_r($data); die;
        }
    }
  
} 
