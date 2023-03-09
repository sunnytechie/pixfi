<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request) {
        dd('welcome here');
    $filenames = [];
    
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $index => $file) {
            $filename = time() . '-' . $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $filename);
            
            $image = new Image();
            $image->title = $request->input('titles')[$index];
            $image->description = $request->input('descriptions')[$index];
            $image->filename = $filename;
            $image->save();
            
            $filenames[] = $filename;
        }
        
        return response()->json(['success' => true, 'filenames' => $filenames]);
    } else {
        return response()->json(['success' => false, 'message' => 'No file uploaded']);
    }
}

}
