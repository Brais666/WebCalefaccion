<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Route;

use App\Http\Resources\User as UserResource;


class AuthController extends Controller
{
    static public function register(Request $request)
    {
        try
        {
            $validatedData = $request->validate([
            'name' => 'required|string|max:255',
                        'email' => 'required|string|email|max:255|unique:users',
                        'password' => 'required|string|min:8',
                        'dni' => 'sometimes|nullable|string|max:10',
                        'address' => 'sometimes|nullable|string|max:50',
                        'localidad' => 'sometimes|nullable|string|max:50',
                        'CP' => 'required|int|digits:5',
                        'telefono' => 'required|int|digits:9',
            ]);
            
            $validatedData['password'] = Hash::make($validatedData['password']);
        
            $user = User::create($validatedData);
            return response()->json(new UserResource($user));
        } catch (\Exception $e) {
            // dd($e);
            return response()->json(['message' => 'Invalid data provided'], 404);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request['email'])->first();

        if (! $user || !Hash::check($request->password, $user->password)) {
            // dd($user);
            return response()->json(['message' => 'Invalid login details'], 404);
        }

        $token = $user->createToken('auth_token')->plainTextToken;
        $request = Request::create('/api/user', 'GET');

        $access = "Bearer {$token}";
        $request->headers->set('Authorization', $access);
      
        $response = app()->handle($request);

        // dd($token);
        // dd($response->getContent());
        $users = json_decode($response->getContent(), true);
        
        $user = array_values($users)[0];

        return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user,
        ]);
    }

    static public function checkMail(Request $request)
    {
        try
        {
            $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            ]);
            
            $user = User::where('email', $request['email'])->first();
        
            if ($user != null)
            {
                return response()->json([
                    'exist' => true,
                    'requirePassword' => $user->email == 'hola@test.com'
                    // 'requirePassword' => $user->password == null
                ]);
            } else 
            {
                return response()->json([
                    'exist' => false
                ]);
            }
        } catch (\Exception $e) {
            // dd($e);
            return response()->json(['message' => 'Invalid data provided'], 404);
        }
    }

    static public function addPassword(Request $request)
    {
        try
        {
            $validatedData = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required|max:255',
            ]);

            User::where('email', $request['email'])->update(['password' => Hash::make($validatedData['password'])]);

            $user = User::where('email', $request['email'])->first();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ], 202);
            
        } catch (\Exception $e) {
            // dd($e);
            return response()->json(['message' => 'Invalid data provided'], 404);
        }
    }

    static public function addName(Request $request)
    {
        try
        {
            // dd($request);
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'surname' => 'required|max:255',
            ]);

            User::where('id', $request->user()->id)->update(['name' => $validatedData['name']]);
            $user = new UserResource($request->user());
            return response()->json($user, 202);
        } catch (\Exception $e) {
            // dd($e);
            return response()->json(['message' => 'Invalid data provided'], 404);
        }
    }

    public function me(Request $request)
    {
        return response()->json([new UserResource($request->user())]);
    }
}
