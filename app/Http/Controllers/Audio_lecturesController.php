<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio_lectures;
use Illuminate\Support\Facades\DB;

class Audio_lecturesController extends Controller
{
    public function store(Request $request){

    $this->middleware('auth');
    $this->validate($request, [
    	'subject' => 'required',
    	'filelink' => 'required',
    ]);

    $audio = new Audio_lectures;
    $audio->subject = $request->input('subject');
    $audio->filelink = $request->input('filelink');
    $audio->save();

    }

    public function index(){
    	$audio_lectures = DB::table('audio_lectures')->latest()->paginate();
    	return view('welcome', ['audio' => $audio_lectures]);
    	
    }

    public function delete() {
    	$audio_lectures = DB::table('audio_lectures')->latest()->paginate();
    }
}
