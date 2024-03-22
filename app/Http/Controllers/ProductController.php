<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProductController extends Controller
{
    function product()
    {
        $product_info = Product::all();
        return view('admin\product', ['product_info' => $product_info]);
    }
    function Product_info(Request $request)
    {
        $product_name = str_replace('', '-', str::lower($request->product_name)) . '-' . rand(1000000, 99999999);
        $upload_file = $request->product_image;

        $extension = $upload_file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $new_name = $product_name . "." . $extension;
        $img = $manager->read($upload_file);
        $img->tojpeg(80)->save(base_path('public/uploads/product/' . $new_name));


        $detalis_image = str_replace('', '-', str::lower($request->product_name)) . '-' . rand(1000000, 99999999);
        $detalis_image_file = $request->detalis_image;

        $extension_detalis = $detalis_image_file->getClientOriginalExtension();
        $detalis_manager = new ImageManager(new Driver());
        $detiles_new_name = $detalis_image . "." . $extension_detalis;
        $detalis_img = $detalis_manager->read($detalis_image_file);
        $detalis_img->tojpeg(80)->save(base_path('public/uploads/product_detalis_image/' . $detiles_new_name));


        Product::insert([
            'product_name' => $request->product_name,
            'product_image' => $new_name,
            'detalis_image' => $detiles_new_name,
            'product' => $request->product,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Product Information Insert Done Successfully!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
    function edit_product($id)
    {
        $eidt_product_info = Product::find($id);
        return view('admin\edit_product', ['eidt_product_info' => $eidt_product_info]);
    }
    function delete_product($id)
    {

        $product_image_delete = Product::where('id', $id)->first()->product_image;
        $delete_for_product = public_path('uploads/product/' . $product_image_delete);
        unlink($delete_for_product);

        $product_detalis_delete = Product::where('id', $id)->first()->detalis_image;
        $delete_for_detalis_profile = public_path('uploads/product_detalis_image/' . $product_detalis_delete);
        unlink($delete_for_detalis_profile);

        Product::find($id)->delete();
        $notification = array(
            'message' => 'WOW finally  Product Information Delete done !',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
    function edit_product_info(Request $request)
    {
        if ($request->product_image == '' && $request->detalis_image == '') {
            Product::find($request->id)->update([
                'product_name' => $request->product_name,
                'product' => $request->product,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => ' Information Updated Done Successfully! No Image',
                'alert-type' => 'success'
            );
            return redirect('product')->with($notification);
        }
        else {
            $product_image_delete = Product::where('id', $request->id)->first()->product_image;
            $delete_for_product = public_path('uploads/product/' . $product_image_delete);
            unlink($delete_for_product);

            $product_detalis_delete = Product::where('id', $request->id)->first()->detalis_image;
            $delete_for_detalis_profile = public_path('uploads/product_detalis_image/' . $product_detalis_delete);
            unlink($delete_for_detalis_profile);


            $product_name = str_replace('', '-', str::lower($request->product_name)) . '-' . rand(1000000, 99999999);
        $upload_file = $request->product_image;

        $extension = $upload_file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $new_name = $product_name . "." . $extension;
        $img = $manager->read($upload_file);
        $img->tojpeg(80)->save(base_path('public/uploads/product/' . $new_name));


        $detalis_image = str_replace('', '-', str::lower($request->product_name)) . '-' . rand(1000000, 99999999);
        $detalis_image_file = $request->detalis_image;

        $extension_detalis = $detalis_image_file->getClientOriginalExtension();
        $detalis_manager = new ImageManager(new Driver());
        $detiles_new_name = $detalis_image . "." . $extension_detalis;
        $detalis_img = $detalis_manager->read($detalis_image_file);
        $detalis_img->tojpeg(80)->save(base_path('public/uploads/product_detalis_image/' . $detiles_new_name));

            Product::find($request->id)->update([
                'product_name' => $request->product_name,
                'product_image' => $new_name,
                'detalis_image' => $detiles_new_name,
                'product' => $request->product,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Information Updated Done Successfully! Yes Image',
                'alert-type' => 'success'
            );
            return redirect('product')->with($notification);
        }
    }
}
