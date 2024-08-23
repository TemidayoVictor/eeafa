<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryAsset;
use Illuminate\Support\Facades\File;

use Illuminate\Foundation\Validation\ValidatesRequests;

class GalleryController extends Controller
{
    //
    use ValidatesRequests;

    public function gallery() {
        return view('admin.gallery', [
            'active' => 'admGallery',
            'admin' => true,
            'type' => 'create',
        ]);
    }

    public function galleryPost(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'body' =>  'required',
        ]);

        $gallery = Gallery::create([
            'title' => $request->title,
            'body' =>  $request->body,
            'status' => 'Active',
        ]);

        if(!empty($request->file('images'))) {

            $imageCount = count($request->file('images'));
            if($imageCount > 0) {
                // move images into folder in public directory
                $count = 1;

                foreach ($request->file('images') as $image) {
                    $randomNumber = rand(100000, 999999);
                    $newImageName = $randomNumber.$count. '.' . $image->extension();
                    $image->move(public_path('galleryimages'), $newImageName);
                    $imagePath = url('galleryimages/' . $newImageName);
                    
                    $gallery->galleryasset()->create([
                        'asset' => $imagePath,
                        'type' => 'image',
                        'status' => 'Active',
                    ]);

                    $count++;
                }
            }

        }

        return back()->with('status', 'Event Created Successfully');

    }


    public function galleryAll() {
        $gallery = Gallery::where('status', 'Active')->with('galleryasset')->orderBy('id', 'desc')->get();
        return view('admin.gallery-all', [
            'active' => 'admGallery',
            'admin' => true,
            'gallery' => $gallery,
        ]);
    }

    public function galleryEdit($id) {
        $data = Gallery::where('id', $id)->with('galleryasset')->first();
        return view('admin.gallery', [
            'active' => 'admGallery',
            'admin' => true,
            'type' => 'edit',
            'data' => $data,
        ]);
    }

    public function galleryEditPost(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'body' =>  'required',
        ]);

        $gallery = Gallery::where('id', $id)->first();

        $updateGallery = Gallery::where('id', $id)
        ->update([
            'title' => $request->title,
            'body' =>  $request->body,
        ]);

        if(!empty($request->file('images'))) {

            $imageCount = count($request->file('images'));
            if($imageCount > 0) {
                // move images into folder in public directory
                $count = 1;

                foreach ($request->file('images') as $image) {
                    $randomNumber = rand(100000, 999999);
                    $newImageName = $randomNumber.$count. '.' . $image->extension();
                    $image->move(public_path('galleryimages'), $newImageName);
                    $imagePath = url('galleryimages/' . $newImageName);
                    
                    $gallery->galleryasset()->create([
                        'asset' => $imagePath,
                        'type' => 'image',
                        'status' => 'Active',
                    ]);

                    $count++;
                }
            }

        }
        return redirect()->route('admGallery')->with('status', "Event Edited Successfully");
    }

    public function galleryDelete($id) {
        $gallery = Gallery::where('id', $id)->first();
        $deleteGallery = Gallery::where('id', $id)
        ->update([
            'status' => 'Inactive',
        ]);   

        return back()->with('status', 'Event Deleted Successfully');
    }

    public function galleryAssetDelete($id) {
        $asset = GalleryAsset::where('id', $id)->first();
        File::delete($asset->asset);
        $asset->delete();
        return back()->with('status', 'Image Deleted Successfully');
    }
}
