<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index($id)
//     {
//         $galleries = Gallery::all();
//         return view('gallery.index');
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $products = Product::all();
//         return view('gallery.create', compact('products'));
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {

//         foreach($request->file as $image){
//             if($image){
//                 $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
//                 Storage::putFileAs('public/gallery', $image, $imageName);

//                 $url = 'storage/gallery/' . $imageName;

//                 Gallery::create([
//                     'name' => $url,
//                 ]);

//             }

//         }
//         Gallery::create($request->validated());

//     }


//     public function show($id)
//     {
//         return redirect()->route('gallery.index');
//     }


//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         return view('gallery.edit');
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
}
