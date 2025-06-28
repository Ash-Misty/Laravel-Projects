<?php
namespace App\Traits;
Trait HTTPResponse{
public function authSuccess($message=null,$data){
 return response()->json([
   'status'=>'request accepted',
   'message'=>$message,
   'data'=>$data,
   'code'=>'200ok'
 ]);
}
public function authErrors($message=null)
{ return response()->json([
    'status'=>'An error occured',

    'message'=>$message,
    'code'=>'250'
]);
}
}
