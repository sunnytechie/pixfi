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
        $posts = Post::orderBy('id', 'desc')
                ->where('id', $post->id)
                ->with('pictures')
                ->get();

        //dd($posts);
        return view('image.new', compact('post', 'posts'));
    }

    public function store(Request $request) {
        //dd($request->all());
        request()->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:50048'
        ]);

        $image = $request->file('file');        

        //Saving to public folder
        //$imageName = $image->getClientOriginalName();
        //$image->move(public_path('images'),$imageName);

        //Saving to Cloudinary
        //$response = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();

        //Saving to storage with Image Intervention
        $imageName = request('file')->store('images', 'public');
        $image = Image::make(public_path("storage/{$imageName}"));
        $image->save();
         
        $imageUpload = new Picture();
        $imageUpload->post_id = $request->post_id;
        $imageUpload->picture = $imageName;
        $imageUpload->save();

        return redirect()->back()->with('message', 'Your file has been uploaded successfully, thank you.');
    }

    public function show($id) {
        $image = Picture::find($id);
        $post = Post::find($image->post_id);
        //dd($post);
        return view('image.show', compact('post', 'image'));
    }

    public function destroy($id) {
        $picture = Picture::find($id);
        $picture->delete();

        return redirect()->route('index');
    }

}
