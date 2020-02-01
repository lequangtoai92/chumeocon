<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Auth;

class HomeController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }

    public function getIndex() {
    	return Auth::user();
    }

    
}
