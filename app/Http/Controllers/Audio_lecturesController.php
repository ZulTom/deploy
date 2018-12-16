<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Audio_lecturesController extends Controller
{
    public function storefile(Request $request){
    	// if ($request->hasFile('file')){
    	// 	return 'yes';
    	// } else {
    	// 	return 'no';
    	// }

    	print_r($request);
    	die();
    }
}
