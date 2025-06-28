<?php

namespace App\Http\Controllers;
use App\Http\Requests\NoteRequest;
use App\Models\Note;
use App\Traits\HTTPResponse;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    use HTTPResponse;
    public function store(NoteRequest $request)
    {
        $request->validated($request->all());
        $note=Note::create([
            'register_no'=>$request->register_no,
            'notes_title'=>$request->notes_title,
            'subject_code'=>$request->subject_code
        ]);

        return $this->authSuccess('Notes Stored Successfully',$note);
    }
    public function index()
    {
       $notes=Note::all();
       return $this->authSuccess('All Notes',$notes);

    }
    public function update(Request $request,$id)
    { $student=$request->user();
        $noteowner=Note::find($id);
        if($student->register_no==$noteowner->register_no)
        {
            $noteowner->notes_title=$request->notes_title;
            $noteowner->subject_code=$request->subject_code;
            $noteowner->save();
            return $this->authSuccess('Notes Successfully updates','');
        }
        else{
            return $this->authErrors('An Error occured in updating notes');
        }

    }
    public function delete(Request $request,$id){
      $student=$request->user();
        $noteowner=Note::find($id);
        if($student->register_no==$noteowner->register_no)
        { $noteowner->delete();
            return $this->authSuccess('Notes deleted Successfully','');
        }
        else{
            return $this->authErrors('An error occured in deleting the notes');
        }
    }
}

