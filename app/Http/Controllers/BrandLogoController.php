<?php

namespace App\Http\Controllers;

use App\Models\BrandLogo;
use Carbon\Carbon;
use Faker\Core\Barcode;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;

class BrandLogoController extends Controller
{
   function brand_logo(){
    $brand_info=BrandLogo::all();
    return view('admin\brandlogo',
    ['brand_info'=>$brand_info]
);

   }
   function brand_logo_info(Request $request){
    $brand_logo_name = str_replace('', '-', str::lower($request->brand_name)) . '-' . rand(1000000, 99999999);
    $upload_file = $request->brand_logo;
    $extension = $upload_file->getClientOriginalExtension();
    $manager = new ImageManager(new Driver());
    $update_name = $brand_logo_name . "." . $extension;
    $img = $manager->read($upload_file);
    $img->tojpeg(80)->save(base_path('public/uploads/brandlogo/' . $update_name));
    BrandLogo::insert([
        'brand_name'=>$request->brand_name,
        'brand_logo'=>$update_name,
        'created_at'=>Carbon::now(),
    ]);
    $notification = array(
        'message' => 'Your Logo Insert Done',
        'alert-type' => 'success'
    );
    return back()->with($notification);

   }
   function edit_brand($id){
    $eidt_brand_info=BrandLogo::find($id);
    return view('admin\edit_brand',['eidt_brand_info'=>$eidt_brand_info]);

   }
   function brand_logo_edit(Request $request){
    $logo_delete = BrandLogo::where('id', $request->id)->first()->brand_logo;
    $delete_for_logo = public_path('uploads/brandlogo/' . $logo_delete);
    unlink($delete_for_logo);

    $brand_logo_name = str_replace('', '-', str::lower($request->brand_name)) . '-' . rand(1000000, 99999999);
    $upload_file = $request->brand_logo;
    $extension = $upload_file->getClientOriginalExtension();
    $manager = new ImageManager(new Driver());
    $update_name = $brand_logo_name . "." . $extension;
    $img = $manager->read($upload_file);
    $img->tojpeg(80)->save(base_path('public/uploads/brandlogo/' . $update_name));

    BrandLogo::find($request->id)->update([
        'brand_name'=>$request->brand_name,
        'brand_logo'=>$update_name,
        'updated_at'=>Carbon::now(),
    ]);
    $notification = array(
        'message' => 'Brand Updated Done Successfully!',
        'alert-type' => 'success'
    );
    return redirect('brand_logo')->with($notification);
   }
   function delete_brand($id){
    $logo_delete = BrandLogo::find($id)->brand_logo;
    $delete_for_logo = public_path('uploads/brandlogo/' . $logo_delete);
    unlink($delete_for_logo);
    BrandLogo::find($id)->delete();
    $notification = array(
        'message' => 'Brand Delete done !',
        'alert-type' => 'success'
    );
    return back()->with($notification);

   }
}
