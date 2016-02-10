<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   // $data = array(
   // 'name'  => 'Rakesh',
  //  'email' => 'sharmarakesh395@gmail.com'
	//);

//return View::make('pages.home')->with('data', $data);
}
