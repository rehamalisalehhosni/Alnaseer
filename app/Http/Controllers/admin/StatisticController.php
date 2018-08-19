<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use App\Models\Customer;
use App\Models\Services;

use Validator;

class StatisticController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    //
    $newsletterCount = Newsletter::count();
    $servicesCount = Services::count();
    $customerCount = Customer::count();
    return view('Backend/Statistic.index',compact('newsletterCount','servicesCount','customerCount'));
  }
}
