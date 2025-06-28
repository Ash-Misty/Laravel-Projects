<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\StudentResource;
use Illuminate\Support\Facades\Hash;
use App\Traits\HTTPResponse;


class StudentController extends Controller
{   use HTTPResponse;
    
    public function register(RegisterRequest $request)
    {


         $request->validated($request->all());
     $student=Student::create([

        'name'=>$request->name,
        'register_no'=>$request->register_no,
        'department'=>$request->department,
        'email'=>$request->email,
        'password'=>Hash::Make($request->password)
     ]);
     return new StudentResource($student);

    }

    public function login(LoginRequest $request)
    {
        $validated=$request->validated();
        $student=Student::where('email',$validated['email'])->first();
        if(Hash::check($request->password,$student->password)&&($student->email==$request->email))
        {  $token=$student->createToken('LoginToken'.$student->email)->plainTextToken;
           return $this->authSuccess('Loggedin Successfully',$token);

        }
        else{
            return $this->authErrors('Unauthorized! Register first');
        }
    }
    public function display(){
        $student=Student::all();
        return  StudentResource::collection($student);
    }
    public function delete($id)
    {
        $student=Student::find($id);
        $student->delete();
        return $this->authSuccess('Student deleted successfully',"");
    }
    public function logout(Request $request)
    {
            $request->user()->currentAccessToken()->delete();

            return $this->authSuccess('Successfully Loggedout','');
        }

}
