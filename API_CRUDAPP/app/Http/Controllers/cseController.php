<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cse;


class cseController extends Controller
{
    public function index(){
        $cseList=cse::all();
        return response()->json([
            'status'=>1,
            'message'=>'The cse list',
            'cselist'=>$cseList
        ]);
    }
    public function store(Request $request) {
       
        $cse=new cse;
        $cse->name=$request->name;
        $cse->email=$request->email;
        $cseData=$cse->save();
        return response()->json([
            'status'=> 1,
            'message'=>'Data stored successfully',
            'data'=>$cseData
        ]);
    }
    public function update(Request $request,$id)
    {

         $cse=cse::find($id);
        $cse->name=$request->name;
        $cse->email=$request->email;
        $updateCse=$cse->save();
        return response()->json([
            'status'=>1,
            'message'=>'updated successfully',
            'data'=>$updateCse
        ]);
    }
    public function delete(Request $request, $id)
{
    $cse = cse::find($id);
    $cse->delete();

    return response()->json([
        'status' => 1,
        'message' => 'Deleted successfully'
    ]);
}

    public function fetch(Request $request,$email)
    {
        $csed=cse::where('email',$email)->first();
        return response()->json([
            'status'=>1,
            'message'=>'fetched',
            'data'=>$csed
        ]);

    }
}
