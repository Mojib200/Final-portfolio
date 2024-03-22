<?php

namespace App\Http\Controllers;

use App\Models\MySelf;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class MySelfController extends Controller
{
    function myself()
    {
        $myself_information = MySelf::all()->first();
        return view('admin\myself',
            ['myself_information' => $myself_information]
        );
    }
    function myself_info(Request $request)
    {
        if (MySelf::all() == '[]') {
            $profile = str_replace('', '-', str::lower($request->name)) . '-' . rand(1000000, 99999999);
            $upload_file = $request->profile;

            $extension = $upload_file->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $new_name = $profile . "." . $extension;
            $img = $manager->read($upload_file);
            $img->tojpeg(80)->save(base_path('public/uploads/My_Self/' . $new_name));
            MySelf::insert([
                'name' => $request->name,
                'phone' => $request->phone,
                'location' => $request->location,
                'email' => $request->email,
                'myself' => $request->myself,
                'profile' => $new_name,
                'facebook' => $request->facebook,
                'youtube' => $request->youtube,
                'instagram' => $request->instagram,
                'whatsapp' => $request->whatsapp,
                'created_at' => Carbon::now(),

            ]);
            $notification = array(
                'message' => 'My Self Information Insert Done Successfully!',
                'alert-type' => 'success'
            );
            return back()->with($notification);
        } else {
            if ($request->profile == '') {
                MySelf::all()->first()->update([

                    'name' => $request->name,
                    'phone' => $request->phone,
                    'location' => $request->location,
                    'email' => $request->email,
                    'myself' => $request->myself,
                    'facebook' => $request->facebook,
                    'youtube' => $request->youtube,
                    'instagram' => $request->instagram,
                    'whatsapp' => $request->whatsapp,
                    'updated_at' => Carbon::now(),
                ]);
                $notification = array(
                    'message' => 'My Self Information Update Done Successfully Not Image !',
                    'alert-type' => 'success'
                );
                return back()->with($notification);
            } else {
                $profile_delete = MySelf::all()->first()->profile;
                $delete_for_profile = public_path('uploads/My_Self/' . $profile_delete);
                unlink($delete_for_profile);
                $profile = str_replace('', '-', str::lower($request->name)) . '-' . rand(1000000, 99999999);
                $upload_file = $request->profile;

                $extension = $upload_file->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $update_name = $profile . "." . $extension;
                $img = $manager->read($upload_file);
                $img->tojpeg(80)->save(base_path('public/uploads/My_Self/' . $update_name));
                MySelf::all()->first()->update([

                    'name' => $request->name,
                    'phone' => $request->phone,
                    'location' => $request->location,
                    'email' => $request->email,
                    'myself' => $request->myself,
                    'profile' => $update_name,
                    'facebook' => $request->facebook,
                    'youtube' => $request->youtube,
                    'instagram' => $request->instagram,
                    'whatsapp' => $request->whatsapp,
                    'updated_at' => Carbon::now(),
                ]);
                $notification = array(
                    'message' => 'My Self Information Update Done Successfully!',
                    'alert-type' => 'success'
                );
                return back()->with($notification);
            }
        }
    }
}
