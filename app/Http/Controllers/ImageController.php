<?php

namespace App\Http\Controllers;

use cloudinary;
use App\Models\Post;
//use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Models\Picture;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class ImageController extends Controller
{
    public function create($post) {
        $post = Post::find($post);
        return view('image.new', compact('post'));
    }

    public function dropzoneUploadStore(Request $request) {
        $image = $request->file('file');

        //Saving to public folder
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);

        //Saving to Cloudinary
        //$response = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();

        //Saving to storage with Image Intervention
        //$imageName = request('file')->store('images', 'public');
        //$image = Image::make(public_path("storage/{$imageName}"));
        //$image->save();
         
        $imageUpload = new Picture();
        $imageUpload->post_id = $request->post_id;
        $imageUpload->picture = $imageName;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }

    public function show($id) {
        $image = Picture::find($id);
        $post = Post::find($image->post_id);
        //dd($post);
        return view('image.show', compact('post', 'image'));
    }

}
