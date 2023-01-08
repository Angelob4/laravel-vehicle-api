<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class apiController extends Controller
{
    function login(Request $request){
        $credentials = $request->only(['email', 'password']);

        if(Auth::attempt($credentials) === false){
            return response()->json(data: 'Unauthorized', status: 401);
        }

        $user = Auth::user();

        $token = $user->createToken(name: 'token');

        return response()->json($token->plainTextToken);

    }

    function create(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->save();
            return response('Created', 201);
        } catch (\Throwable $th) {
            Log::error($th);
            return response('INTERNAL SERVER ERROR ', 500);
        }
    }
}
