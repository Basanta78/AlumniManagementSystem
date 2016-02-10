<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profile;
use App\Http\Controllers;

class UC extends Controller
{
    public function home()
    {
    	//$users = DB::select('select * from profiles ');
        //foreach ($user as $user) {
    	//echo $user->name;
		//}
      	//return view('pages.home', ['users' => $users]);
    	$users = Profile::all();
    	return view('pages.home', compact('users'));
    }
}

