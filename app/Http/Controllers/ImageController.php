<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Image;

class ImageController extends Controller
{
    public function upload(Request $request){
        $validator = Validator::make($request->all(), [ 'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg' ]);
        if($validator->fails()){
            return 'error';
        }

        $image_name = $request->file('image')->store('public');
        
        $image_save = new Image;
        $image_save->image = explode('/', $image_name)[1];
        $image_save->save();

        return redirect()->route('home');
    }

    public function redirectImage(){
        return view('home')->with(['image' => Image::get() ]);
    }
}