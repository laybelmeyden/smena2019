<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Formtwo;

class MainController extends Controller
{
    public function index()
    {
      return view('pages.main');
    }
  
  	public function docs()
    {
      return view('pages.docs');
    }
  
  	public function newinfo()
    {
      return view('pages.newinfo');
    }
  	public function rasp()
    {
      return view('pages.rasp');
    }
  	public function in()
    {
      return view('pages.googleedca492c694e8d2c');
    }
  
  	public function vsephoto()
    {
      return view('pages.vsephoto');
    }
    
    public function scroll()
    {
      $forms = Form::latest()->get();
      $formtwos = Formtwo::latest()->get();
      return view('pages.scrol18923net', compact('forms','formtwos'));
    }
    

      public function anketa()
      {
        
      return view('pages.anketa');
      }
  
  	public function photovideo()
      {
        
      return view('pages.photovideo');
      }
  	public function ssoboy()
      {
        
      return view('pages.ssoboy');
      }
      
      public function uchat()
      {
        
      return view('pages.uchat');
      }
      
      public function form1(Request $request)
      {
        Form::create(['name' => request('p1'),
      'date' => request('p2'),
      'birthplace' => request('p3'),
      'address' => request('p4'),
      'place' => request('p5'),
      'exp' => request('p6'),
      'wins' => request('p7'),
      'letter' => request('p8'),
      'tel' => request('p9'),
      'email' => request('email'),
      'app' => request('p11')]
      );
      
      $data= array(
      'email' => request('email'),
      'p1' => request('p1'),
      'p2' => request('p2'),
      'p3' => request('p3'),
      'p4' => request('p4'),
      'p5' => request('p5'),
      'p6' => request('p6'),
      'p7' => request('p7'),
      'p8' => request('p8'),
      'p9' => request('p9'),
      'p11' => request('p11'),
      );

       \Mail::send('email.mail1', $data, function($message) use ($data)
    {
        $mail_admin = env('MAIL_USERNAME');
        $message->from($data['email'],$data['p1'],$data['p2'],$data['p3'],$data['p4'],$data['p5'],$data['p6'],$data['p7'],$data['p8'],$data['p9'],$data['p11']);
        $message->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     
     session()->flash('flash message', 'Заявка успешно отправлена !');
     return view('home');
    }
    
    public function form2(Request $request)
      {
         Formtwo::create([ 
        'email' => request('email'),    
        'fio' => request('p1'), 
        'nameproject' => request('p2'), 
        'celi' => request('p3'), 
        'aktual' => request('p4'), 
        'opis' => request('p5'), 
        'plan' => request('p6'),
        'team' => request('p7'), 
        'priloj' => request('p8'), 
        ]); 
          
          
    $data= array(
      'email' => request('email'),
      'p1' => request('p1'),
      'p2' => request('p2'),
      'p3' => request('p3'),
      'p4' => request('p4'),
      'p5' => request('p5'),
      'p6' => request('p6'),
      'p7' => request('p7'),
      'p8' => request('p8'),
      );
       \Mail::send('email.mail2', $data, function($message1) use ($data)
       
    {
        $mail_admin = env('MAIL_USERNAME');
        $message1->from($data['email'],$data['p1'],$data['p2'],$data['p3'],$data['p4'],$data['p5'],$data['p6'],$data['p7'],$data['p8']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     session()->flash('flash message', 'Заявка успешно отправлена !');
      return view('home');
    }
}
