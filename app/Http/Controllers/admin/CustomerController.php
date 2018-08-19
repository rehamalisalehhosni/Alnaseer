<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Services;
use App\Models\CustomerServices;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
      //
      $customer= Customer::orderBy('customer_id','DESC')->paginate(20);
      return view('Backend/Customer.index',compact('customer'))
      ->with('i', ($request->input('page', 1) - 1) * 20);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $services= Services::lists('title','services_id');
    return view('Backend/Customer.create',compact('services'));

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
      $this->validate($request, [
          'title' => 'required',
          'services_id'  => 'required|array|min:1',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      //$news = new News($request->input()) ;
      $customer = new Customer;
      $customer->title = $request->title;

/*      if(!$request->publish){
        $request->publish=0;
      }
      $services->publish = $request->publish;
*/    $customer->sort = $request->sort;
      if($file = $request->hasFile('image')) {
          $file = $request->file('image') ;
          $extension = $file->getClientOriginalExtension();
          $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
          //$fileName = $file->getClientOriginalName() ;
          $destinationPath = public_path().'/Uploads/customer/' ;
          $file->move($destinationPath,$fileName);
          $customer->image = $fileName ;
      }
      $customer->save() ;
      if($request->services_id){
       foreach ($request->services_id as  $item) {
         $customerServices = new CustomerServices;
         $customerServices->customer_id=$customer->customer_id;
         $customerServices->services_id=$item;
         $customerServices->save();
       }
      }
      return redirect()->route('customer.index')
      ->with('success','Customer created successfully');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
      //
      $item = Customer::find($id);
      return view('Backend/Customer.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
      $item = Customer::find($id);
      $services= Services::lists('title','services_id');
      $customerServicesData=CustomerServices::select('services_id')->where('customer_id',$id)->get();
      $customerServices = array_map(function($element) {
              return $element['services_id'];
          },
          $customerServicesData->toArray()
      );
      return view('Backend/Customer.edit',compact('item','services','customerServices'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
      //
      $this->validate($request, [
          'title' => 'required',
          'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'services_id'  => 'required|array|min:1',
      ]);
      $customer=Customer::find($id);
      //->update($request->all());
      $customer->title = $request->title;
/*      if(!$request->publish){
        $request->publish=0;
      }
      $services->publish = $request->publish;
*/    $customer->sort = $request->sort;
      if($file = $request->hasFile('image')) {
          $file = $request->file('image') ;
          $extension = $file->getClientOriginalExtension();
          $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
          //$fileName = $file->getClientOriginalName() ;
          $destinationPath = public_path().'/Uploads/customer/' ;
          $file->move($destinationPath,$fileName);
          $customer->image = $fileName ;
      }
      $customer->update() ;

      if($request->services_id){
        $affectedRows = CustomerServices::where('customer_id', '=', $customer->customer_id)->delete();
       foreach ($request->services_id as  $item) {
         $customerServices = new CustomerServices;
         $customerServices->customer_id=$customer->customer_id;
         $customerServices->services_id=$item;
         $customerServices->save();
       }
      }

      return redirect()->route('customer.index')
      ->with('success','Customer updated successfully');

  }


  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
      //
      Customer::find($id)->delete();
      $affectedRows = CustomerServices::where('customer_id', '=', $id)->delete();

      return redirect()->route('customer.index')
      ->with('success','Customer deleted successfully');

  }
}
