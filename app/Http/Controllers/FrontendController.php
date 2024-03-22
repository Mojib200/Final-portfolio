<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\BrandLogo;
use App\Models\Customer_Review;
use App\Models\Cv;
use App\Models\MySelf;
use App\Models\Product;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
class FrontendController extends Controller
{
    public function index()
    {
        $myself_info=MySelf::all()->first();
        $about_info=About::all()->first();
        $Service_infos=Service::paginate(3);
        $product_infos=Product::paginate(3);
        $frontend_cv = Cv::all()->first();
        $customer_review=Customer_Review::all();
        $count_product=Product::count();
        $count_service=Service::count();
        $count_customer=Customer_Review::count();
        $all_brand=BrandLogo::all();
        $count_brand=BrandLogo::count();
        return view('frontend_master\index',[
            'myself_info'=>$myself_info,
            'about_info'=>$about_info,
            'Service_infos'=>$Service_infos,
            'product_infos'=>$product_infos,
            'frontend_cv'=>$frontend_cv,
            'customer_review'=>$customer_review,
            'count_product'=>$count_product,
            'count_service'=>$count_service,
            'count_customer'=>$count_customer,
            'all_brand'=>$all_brand,
            'count_brand'=>$count_brand,
        ]);
    }

    function frontend_download(Request $request, $cv)
   {

    return response()->download(public_path('uploads/CV/'.$cv));
   }
   function frontend_view($id)
   {
    $frontend_view=Cv::find($id);
    return view('frontend_master\CV_view_frontend',compact('frontend_view'));
   }

   function customer_review(Request $request){
    $find=Customer_Review::where('customer_email',$request->customer_email)->get();
    if( $find=='[]'){
    $customer_profile = str_replace('', '-', str::lower($request->customer_name)) . '-' . rand(1000000, 99999999);
    $upload_file = $request->customer_image;
    $extension = $upload_file->getClientOriginalExtension();
    $manager = new ImageManager(new Driver());
    $update_name = $customer_profile . "." . $extension;
    $img = $manager->read($upload_file);
    $img->tojpeg(80)->save(base_path('public/uploads/customer/' . $update_name));
    Customer_Review::insert([
        'customer_name'=>$request->customer_name,
        'customer_email'=>$request->customer_email,
        'customer_number'=>$request->customer_number,
        'customer_image'=>$update_name,
        'customer_message'=>$request->customer_message,
        'created_at'=>Carbon::now(),
    ]);
    $notification = array(
        'message' => 'Your Review Done',
        'alert-type' => 'success'
    );
    return back()->with($notification);

}
else{
    $notification = array(
        'message1' => 'All Reday Insert Done',
        'alert-type' => 'success'
    );
    return back()->with($notification);

}


   }

   function customer_review_show(){
    $customer_reviews=Customer_Review::all();
    return view('admin\customer_review_show',
    ['customer_reviews'=>$customer_reviews]);
   }
   function delete_customer_reviews($id){
    $image_delete = Customer_Review::find($id)->customer_image;
    $delete_for_image = public_path('uploads/customer/' . $image_delete);
    unlink($delete_for_image);
    Customer_Review::find($id)->delete();
    $notification = array(
        'message' => 'Customer Reviews Delete done !',
        'alert-type' => 'success'
    );
    return back()->with($notification);


   }
}
