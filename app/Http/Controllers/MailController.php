<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use App\Mail\WelcomeUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
 
class MailController extends Controller
{
    public function send(Request $request)
    {
       
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo Two One';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Simongrup S.l.';
        $objDemo->receiver = 'Adnan Basic';
 
        Mail::to("it@nascorenergias.com")->send(new DemoEmail($objDemo));

        return redirect('bienvenido')->with('success','Pedido realizado correctamente, en breve recibirás un correo de nuestra organización. Gracias por confiar en nosotros!');
         //return view('bienvenido')->with('success','Pedido realizado correctamente, en breve recibirás un correo de nuestra organización. Gracias por confiar en nosotros!');
    }

    public function send2(Request $request)
    {
       
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo Two One';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Simongrup S.l.';
        $objDemo->receiver = 'Adnan Basic';
 
        Mail::to("it@nascorenergias.com")->send2(new WelcomeUser($objDemo));

        return redirect('bienvenido')->with('success','Pedido realizado correctamente, en breve recibirás un correo de nuestra organización. Gracias por confiar en nosotros!');
         //return view('bienvenido')->with('success','Pedido realizado correctamente, en breve recibirás un correo de nuestra organización. Gracias por confiar en nosotros!');
    }
}