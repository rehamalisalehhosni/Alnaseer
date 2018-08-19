<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\OurProcess;


class OurProcessingController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    $id=1;
    $ourProcess= OurProcess::find($id);
    return view('Front/OurProcess.index',compact('ourProcess'));
  }


}
