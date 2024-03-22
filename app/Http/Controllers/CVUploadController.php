<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CVUploadController extends Controller
{
    function cv()
    {
        return view('admin\cv');
    }
    function cv_info(Request $request)
    {
        if (Cv::all() == '[]') {
            $file = $request->cv;
            $extension = 'Md.Mojibur Rahman'. '.' . $file->getClientOriginalExtension();
            $request->cv->move('uploads/CV/', $extension);
            Cv::insert([
                'cv' => $extension,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'My CV Insert Done Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        } else {
            $cv_delete = Cv::all()->first()->cv;
            $delete_for_cv = public_path('uploads/CV/' . $cv_delete);
            unlink($delete_for_cv);
            $file = $request->cv;
            $extension = 'Md.Mojibur Rahman' . '.' . $file->getClientOriginalExtension();
            $request->cv->move('uploads/CV/', $extension);
            Cv::all()->first()->update([
                'cv' => $extension,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'My CV Update Done Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
    }
    function view_cv()
    {
        $info_cv = Cv::all();
        return view('admin\CV_view', ['info_cv' => $info_cv],);
    }
    function download(Request $request, $cv)
    {

        return response()->download(public_path('uploads/CV/' . $cv));
    }
    function view($id)
    {
        $view = Cv::find($id);
        return view('admin\CV_view_all', compact('view'));
    }
}
