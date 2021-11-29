<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    
    public function register(Request $request)
    {
        $request->validate([
            'password' =>'required|confirmed'
        ]);
        //create user
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        //create token is a key can access to api
        // $token = $user->createToken('mytoken')->plainTextToken;

        return response()->json([
            'user' => $user,
            // 'token' => $token,
        ]);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'User logout']);
    }
    
    public function login(Request $request)
    {
        //check email
        $user = User::where('email', $request->email)->first();

        //check password
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'Bad login'], 401);
        }
        //create token is a key can access to api
        // $token = $user->createToken('mytoken')->plainTextToken;

        return response()->json([
            'user' => $user,
            // 'token' => $token,
        ]);
    }
    
    public function index() {
        return User::get();
    }

    public function show($id) {
        return User::findOrfail($id);
    }

    public function destroy($id){
        return User::destroy($id);
    }
}
