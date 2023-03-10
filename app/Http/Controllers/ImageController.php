<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Picture;
//use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;


class ImageController extends Controller
{
    public function create($post) {
        $post = Post::find($post);
        return view('image.new', compact('post'));
    }

    public function dropzoneUploadStore(Request $request) {
        $image = $request->file('file');

        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);

        //$response = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();
         
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
