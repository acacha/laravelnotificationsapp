<?php namespace LaravelNotificationApp\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use LaravelNotificationApp\Http\Requests;
use LaravelNotificationApp\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PlansController extends Controller {

    public function __construct() {

    }

	//
    public function getChoose(){
        return view('plans.choose');
    }

    public function postChoose(){
        //Uncomment for debugging
        //dd(Input::all());
        $token = Input::get('stripeToken');
        Auth::user()->subscription('basic')->create($token);

        return view('plans.choose')->with('subscriptionresult',1);
    }
}
