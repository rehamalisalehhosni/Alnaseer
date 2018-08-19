<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends Controller
{

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $id=1;
    $item = Setting::find($id);
    return view('Backend/Setting.edit',compact('item'));

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
      'lat' => 'required',
      'company_name' => 'required',
      'long' => 'required',
      'email' => 'required|email',
      'address' => 'required',
      'tel' => 'required',
      'logo' => 'mimes:jpg,png,jepg,gif|max:50048',
    ]);
    $setting = Setting::find($id);;
    $setting->lat = $request->lat;
    $setting->long = $request->long;
    $setting->email = $request->email;
    $setting->address = $request->address;
    $setting->tel = $request->tel;
    $setting->company_name = $request->company_name;
    if($request->hasFile('logo')) {
      $file = $request->file('logo') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/setting/logo/' ;
      $file->move($destinationPath,$fileName);
      $setting->logo = $fileName ;
    }
    $setting->update() ;
    return redirect()->route('setting.edit',1)
    ->with('success','Setting updated successfully');
  }

}
