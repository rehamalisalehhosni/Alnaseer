<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\OurProcess;

class OurProcessController extends Controller
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
    $item = OurProcess::find($id);
    return view('Backend/OurProcess.edit',compact('item'));

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
      'content' => 'required',
      'image' => 'mimes:jpg,png,jepg,gif|max:50048',
    ]);
    $ourProcess = OurProcess::find($id);
    $ourProcess->content = $request->content;

    if($request->hasFile('image')) {
      $file = $request->file('image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/our_process/' ;
      $file->move($destinationPath,$fileName);
      $ourProcess->image = $fileName ;
    }
    $ourProcess->update() ;
    return redirect()->route('ourProcess.edit',1)
    ->with('success','Our Process updated successfully');
  }

}
