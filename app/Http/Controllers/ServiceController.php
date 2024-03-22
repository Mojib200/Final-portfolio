<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function service(){
        $service_info=Service::all();
        return view('admin\service',['service_info'=>$service_info]);

    }
    function service_info(Request $request){
        Service::insert([
            'service_name'=>$request->service_name,
            'font_awesome'=>$request->font_awesome,
            'service'=>$request->service,
            'created_at'=>Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Service Information Insert Done Successfully!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
   function edit_service($id){
    $eidt_service_info=Service::find($id);
    return view('admin\edit_service',['eidt_service_info'=>$eidt_service_info]);
   }
   function edit_service_info(Request $request){
    Service::find($request->id)->update([
        'service_name'=>$request->service_name,
        'font_awesome'=>$request->font_awesome,
        'service'=>$request->service,
        'updated_at'=>Carbon::now(),
    ]);
    $notification = array(
        'message' => 'Service Information Updated Done Successfully!',
        'alert-type' => 'success'
    );
    return redirect('service')->with($notification);
}
   function delete_service($id){

    Service::find($id)->delete();
    $notification = array(
        'message' => 'WOW finally  Service Information Delete done !',
        'alert-type' => 'success'
    );
    return back()->with($notification);
   }
}
