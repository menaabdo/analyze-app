<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Predict;
class TestController extends Controller
{
    public function check(Request $request){
        if($request['a1']=='I’m not financially stable and I need help')
        return redirect()->route('test');
    }
   public function getdata(){
       $test=Test::all();
       return view('test',compact('test'));
    }
    public function catch_ans(Request $request){
        $answer1=$request['Q1'];
        $answer2=$request['Q2'];
        $answer3=$request['Q3'];  
        $pdf=Predict::where('predict1',$answer1 )
                      ->where('predict2',$answer2 ) 
                      ->where('predict3',$answer3 )    
                      ->get();
        $url=asset('pdfs/'.$pdf[0]->path);           
        return view('auth.register',compact('url'));
    }
}
