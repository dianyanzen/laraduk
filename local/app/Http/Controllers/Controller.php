<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use Auth;
use Session;
use App;
use Redirect;
use Config;
use Mail;
use Cache;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct() {
      // Meta
      /*$metadata = Meta::where('id','=','1')->first();
      View::share('metadata', $metadata);
      // Language
      $translate = Session::get('applocale');
      View::share('translate', $translate);
	  
	  ****************************************
	   * Edited by : Kaka (arif@arkamaya.co.id)
	   * Date: October 04, 2017
	   ****************************************
	  // Menu
	  $menu = Menu::whereNull('parent_id')->with('children')->get();
	  // Footer
	  $footer = Footer::get()->first();
	  
	  View::share('menu', $menu);
	  View::share('footer', $footer);*/
    }

    public function index() {
     $page = 'home';
     return View::make('index')->with('page',$page);
    }
}
