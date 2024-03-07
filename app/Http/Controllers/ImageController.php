<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Image;

class ImageController extends Controller
{
    public function upload(Request $request){
        $validator = Validator::make($request->all(), [ 'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048' ]);
        if($validator->fails()){
            echo 'error';
        }

        $image = $request->image;
        $image->storeAs('storage');
        
        $image_save = new Image;
        $image_save->image = $request->file('image')->getFilename();
        $image_save->save();

        return redirect()->route('home');
    }

    public function redirectImage(){
        return view('home')->with(['image' => Image::get() ]);
    }
}