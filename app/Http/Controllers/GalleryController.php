<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $galleries  = Gallery::all();
        return view( 'backoffice.gallery', compact( 'galleries' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {

        return view( 'create.gallery' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $request->validate( [
            'img'=>'required',
        ], [
            'img.required'=>'veuillez selectionner une image.',
        ] );
        $img = $request->file( 'img' );
        $newName = Storage::disk( 'public' )->put( '', $img );
        $gallery = new Gallery();
        $gallery->img = $newName;
        $thumbnailpath = public_path( 'storage/'.$gallery->img );
        $imgde = Image::make( $thumbnailpath )->resize( 500, 500 );
        $imgde->save( $thumbnailpath );
        $gallery->save();
        return redirect()->route( 'gallery.index' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Gallery  $gallery
    * @return \Illuminate\Http\Response
    */

    public function show( Gallery $gallery ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Gallery  $gallery
    * @return \Illuminate\Http\Response
    */

    public function edit( Gallery $gallery ) {
        return view( 'edit.gallery', compact( 'gallery' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Gallery  $gallery
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Gallery $gallery ) {
        $img = $request->file( 'img' );
        if ( $img != null ) {
            Storage::disk( 'public' )->delete( $gallery->img );
            $newName = Storage::disk( 'public' )->put( '', $img );
            $gallery->img = $newName;
            $thumbnailpath = public_path( 'storage/'.$gallery->img );
            $imgde = Image::make( $thumbnailpath )->resize( 500, 500 );
            $imgde->save( $thumbnailpath );
            $gallery->save();
        }
        return redirect()->route( 'gallery.index' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Gallery  $gallery
    * @return \Illuminate\Http\Response
    */

    public function destroy( Gallery $gallery ) {
        Storage::disk( 'public' )->delete( $gallery->img );
        $gallery->delete();
        return redirect()->back();
    }
}
