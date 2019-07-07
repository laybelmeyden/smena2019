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
        if ( $request -> hasFile('app')){

        $filename = $request -> app -> getClientOriginalName();

        $request -> app -> storeAs('public/upload', $filename);

        }
          // $app = new Form;
          // $app -> app = $filename;
          // $app -> save();

        Form::create([
      'name' => request('name'),
      'date' => request('date'),
      'birthplace' => request('birthplace'),
      'address' => request('address'),
      'place' => request('place'),
      'exp' => request('exp'),
      'wins' => request('wins'),
      'letter' => request('letter'),
      'tel' => request('tel'),
      'email' => request('email'),
      'app' => request('app')-> store('public/upload')
      ]
      );

      $data= array(
        'name' => request('name'),
        'date' => request('date'),
        'birthplace' => request('birthplace'),
        'address' => request('address'),
        'place' => request('place'),
        'exp' => request('exp'),
        'wins' => request('wins'),
        'letter' => request('letter'),
        'tel' => request('tel'),
        'email' => request('email'),
        'app' => request('app')
      );

       \Mail::send('email.mail1', $data, function($message) use ($data)
    {
        $mail_admin = env('MAIL_USERNAME');
        $message->from($data['email'],$data['name'],$data['date'],$data['birthplace'],$data['address'],$data['place'],$data['exp'],$data['wins'],$data['letter'],$data['tel'],$data['app']);
        $message->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     
     session()->flash('flash message', 'Заявка успешно отправлена !');
     return view('home');
    }
    
    public function form2(Request $request)
      {
         Formtwo::create([ 
        'email' => request('email'),    
        'fio' => request('fio'), 
        'nameproject' => request('nameproject'), 
        'celi' => request('celi'), 
        'aktual' => request('aktual'), 
        'opis' => request('opis'), 
        'plan' => request('plan'),
        'team' => request('team'), 
        'priloj' => request('priloj'), 
        ]); 
          
          
    $data= array(
      'email' => request('email'),    
        'fio' => request('fio'), 
        'nameproject' => request('nameproject'), 
        'celi' => request('celi'), 
        'aktual' => request('aktual'), 
        'opis' => request('opis'), 
        'plan' => request('plan'),
        'team' => request('team'), 
        'priloj' => request('priloj'),
      );
       \Mail::send('email.mail2', $data, function($message1) use ($data)
       
    {
        $mail_admin = env('MAIL_USERNAME');
        $message1->from($data['email'],$data['fio'],$data['nameproject'],$data['celi'],$data['aktual'],$data['opis'],$data['plan'],$data['team'],$data['priloj']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     session()->flash('flash message', 'Заявка успешно отправлена !');
      return view('home');
    }
}
