<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

/**
 *
 */
class ResizeController extends Controller
{

    function index()
    {
        return view('resize');
    }

    public function resize_image(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/thumbnai');
        $resize_image = Image::make($image->getRealPath());
        $resize_image->resize(150, 150, function($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '' . $image_name);
        $destinationPath = public_path('images');
        $image->move($destinationPath, $image_name);

        return back()->with('success', 'Image Upload successfull')->with('imageName', $image_name);
    }
}

 ?>
