<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Mail\WelcomeUser;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
         if ($_POST['g-recaptcha-response'] == '') 
        {
           $prev= url()->current(); 
        echo "Captcha invalido";
        echo '<button type="submit" class="btn btn-primary"><a href="https://www.gasoleodecalefaccion.com/register">Registrarme</a></button>';
        //return view('/');
        
        //dd($prev);
        
        exit;
        } else {
            
            $obj = new \stdClass();
            
            $obj->secret = "6LdtL4gfAAAAAOFKLOoMkZ6nd6Nu9ODdwzI0wQan";
            
            $obj->response = $_POST['g-recaptcha-response'];
            $obj->remoteip = $_SERVER['REMOTE_ADDR'];
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            
            
            $options = array(
                'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($obj)
                )
            );
            
            $context = stream_context_create($options);
             //dd(file_get_contents($url, false, $context));
           // $result = file_get_contents($url, false, $context);
               $result = true;
            $validar = json_decode($result);
            
                
            /* FIN DE CAPTCHA */
            
            if($result==true)
            {
                
                 //dd($data);
                $objDemo = new \stdClass();
                
                $objDemo->demo_two = $data['name'];
                
                $objDemo->sender = 'Simongrup S.l.';
                
                $objDemo->receiver = $data['name'];
                
                
                $mail = $data['email'];
                
                //dd($mail);
               Mail::to($mail)->send(new WelcomeUser($objDemo));
               
               Mail::to('it@nascorenergias.com')->send(new WelcomeUser($objDemo));
               
                
               return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'session_1d' => '3'
                ]);
                
            }
            else 
            {
                echo "Captcha invalido";
            }
        }
       
    }

    /*public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function showUserRegisterForm()
    {
        return view('auth.register', ['url' => 'user']);
    }

    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }*/

    /*protected function createUser(Request $request)
    {
        $this->validator($request->all())->validate();
        $writer = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->intended('login/user');
    }*/

   /*public function redirectTo()
    {
        
        if (session()->has('redirect_to'))
            return session()->pull('redirect_to');

        return $this->redirectTo;
    }*/

}
