<?php

namespace App\Http\Controllers;
use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;


class UniversityController extends Controller
{
    public function register(AuthRequest $request)
    {
        $request->validated($request->all());
        $university=University::create([
            'Name'=> $request->Name,
            'email'=> $request->email,
            'Password'=> Hash::Make($request->Password),
            'Reg_No'=> $request->Reg_No,
            'Department'=> $request->Department,
            'Dob'=> $request->Dob

        ]);
        return response ()->json([
            'status'=>1,
            'message'=>'User registered successfully',
            'token'=>$university->createToken('Register Token'.$university->Name)->plainTextToken,
             ]);
    }
    public function login(LoginRequest $request)
    {
       $validated=$request->validated();
       $user=University::where('email',$validated['email'])->first();
       if(Hash::check($request->Password,$user->Password) && $user->email==$request->email)
       {
        return response ()->Json([
            'status'=>1,
            'message'=>'logged in successfully',
            'token'=>$user->createToken('Login Token'.$user->Name)->plainTextToken,

        ]);
       }
       else{
        return response()->Json([
            'status'=>2,
            'Message'=>'Invalid credentials, Register Now'
        ]);
       }
    }
    public function logout(Request $request){
        $user=$request->user();

        if($user){
        $user->tokens()->delete();
        return response()->json([
            'Status'=>1,
            'Message'=>'User Logged out successfully'
        ]);
        }
        if(!$user){
            return response()->json([
                'Status'=>2,
                'message'=>'Unauthorized! Login First'
            ]);

        }
    }
}
