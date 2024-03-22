<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\MySelf;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class AboutController extends Controller
{
    function about()
   {
    $about_info=About::all()->first();
     return view('admin\about',
     ['about_info'=>$about_info]
    );
   }
    function about_info(Request $request)
   { if(About::all()=='[]')
    {
        $about= str_replace('', '-', str::lower($request->exam_name1)) . '-' . rand(1000000, 99999999);
        $upload_file = $request->about_profile;

        $extension = $upload_file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
            $new_name = $about . "." . $extension ;
            $img = $manager->read( $upload_file);
            $img->tojpeg(80)->save(base_path('public/uploads/about/'.$new_name));
        About::insert([
            'about_profile'=>$new_name,
            'about'=>$request->about,
            'exam_name1'=>$request->exam_name1,
            'exam_name2'=>$request->exam_name2,
            'exam_name3'=>$request->exam_name3,
            'exam_year1'=>$request->exam_year1,
            'exam_year2'=>$request->exam_year2,
            'exam_year3'=>$request->exam_year3,
            'progressbar1'=>$request->progressbar1,
            'progressbar2'=>$request->progressbar2,
            'progressbar3'=>$request->progressbar3,
            'created_at'=>Carbon::now(),

        ]);
        $notification = array(
            'message' => 'About Information Insert Done Successfully!',
            'alert-type' => 'success'
        );
        return back()->with($notification);

    }
    else {
        $profile_delete=About::all()->first()->about_profile;
        $delete_for_profile = public_path('uploads/about/'.$profile_delete );
        unlink($delete_for_profile);
        $about= str_replace('', '-', str::lower($request->exam_name1)) . '-' . rand(1000000, 99999999);
        $upload_file = $request->about_profile;

        $extension = $upload_file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
            $update_name = $about . "." . $extension ;
            $img = $manager->read( $upload_file);
            $img->tojpeg(80)->save(base_path('public/uploads/about/'.$update_name));
        About::all()->first()->update([

            'about_profile'=>$update_name,
            'about'=>$request->about,
            'exam_name1'=>$request->exam_name1,
            'exam_name2'=>$request->exam_name2,
            'exam_name3'=>$request->exam_name3,
            'exam_year1'=>$request->exam_year1,
            'exam_year2'=>$request->exam_year2,
            'exam_year3'=>$request->exam_year3,
            'progressbar1'=>$request->progressbar1,
            'progressbar2'=>$request->progressbar2,
            'progressbar3'=>$request->progressbar3,
            'updated_at'=>Carbon::now(),

        ]);
        $notification = array(
            'message' => 'About  Information Update Done Successfully!',
            'alert-type' => 'success'
        );
        return back()->with($notification);

    }


   }
}
