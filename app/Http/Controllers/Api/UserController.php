<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile(Request $request){
    try {
        $user = User::find($request->user()->id);
        return response()->json([
            'user' => $user
        ], 200);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Something went wrong',
            'error' => $e->getMessage()
        ], 500);
    }
       
    }

public function updateProfile(Request $request){
    try {
        $user = User::find($request->user()->id);
        $user->name = $request->name;
        $user->image = $request->image;
        $user->email = $request->email;
        $user->password= $request->password;
        $user->save();
        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user
        ], 200);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Something went wrong',
            'error' => $e->getMessage()
        ], 500);
    }
       
    }
}