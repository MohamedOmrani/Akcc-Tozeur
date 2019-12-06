<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoEmail;
use \stdClass;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    function testMail(Request $request) 
    {   
        $this->validate($request,[
            'Nom' => 'required',
            'mailinput' => 'required',
            'subject' => 'required',
            'body' => 'required'
    
            
        ]);
        $postmail= new stdClass();
        $postmail->Nom =$request->input('Nom'); 
        $postmail->mailinput =$request->input('mailinput');
        $postmail->subject =$request->input('subject');
        $postmail->body =$request->input('body'); 
            
        Mail::to('laravellaravel250@gmail.com')->send(new DemoEmail($postmail));
       
        
    } 
    public function contact()
    {
        return view('Mail.formulaire');
    }



    // public function Demander_inscription_Voilentaire()
    // {
    //     return view('pages.Demander_inscription_Voilentaire');
    // }

    
     
   
}
