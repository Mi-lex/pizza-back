<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'phone' => ['required', 'string', 'min:4', 'max:20'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $credentials = request(['phone', 'password']);

        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized Access, please confirm credentials'
            ], 401);

        $user = $request->user();

        return response()->json([
            'success' => true,
            'phone' => $user->phone,
        ], 201);
    }

    public function register(Request $request)
    {
        $request->validate([
            'phone' => ['required', 'string', 'min:4', 'max:20', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = User::create([
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
        ]);

        return response()->json([
            'success' => true,
            'phone' => $user->phone,
        ], 201);
    }
}
