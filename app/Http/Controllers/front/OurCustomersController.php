<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerServices;


class OurCustomersController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {

    $customer= Customer::get();
    return view('Front/OurCustomer.index',compact('customer'));
  }


}
