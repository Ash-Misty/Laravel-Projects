<?php

namespace App\Http\Controllers;
use App\Models\Hostellers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

class HostellersController extends Controller
{
    public function store(StoreRequest $request)
    {
       $request->validated($request->all());
       Hostellers::create([
        'Hostel_Serial_no'=>$request->Hostel_Serial_no,
        'Name'=>$request->Name,
        'Department'=>$request->Department,
        'Year'=>$request->Year
    ]);
    return response()->json([
        'Status'=>'Success',
        'Message'=>'Successfully created the Hosteller',


    ]);

}

public function update($id, Request $request)
{
    $hosteller = Hostellers::find($id);
    $hosteller->Hostel_Serial_no = $request->Hostel_Serial_no;
    $hosteller->Name = $request->Name;
    $hosteller->Department = $request->Department;
    $hosteller->Year = $request->Year;

    $hosteller->save();

    return response()->json([
        'status' => 1,
        'message' => 'Updated successfully',
        'data' => $hosteller
    ]);
}
 public function index()
 {
   $hostellers=Hostellers::all();
   return response()->json([
    'STATUS'=>'SUCCESS',
    'Data'=>$hostellers
   ]);
 }

 public function filter($Hostel_Serial_no, Request $request)
 {
    $hosteller=Hostellers::where('Hostel_Serial_no',$Hostel_Serial_no)->first();
    return response()->json([
        'status'=>'success',
        'message'=>'Fetched successfully',
        'Data'=>$hosteller
    ]);
 }

public function delete($Hostel_Serial_no, Request $request)
{
    $hosteller=Hostellers::where('Hostel_Serial_no',$Hostel_Serial_no)->first();
    $hosteller->delete();
    return response()->json([
        'status'=>'Success',
        'message'=>'successfully deleted'
    ]);
}
}
