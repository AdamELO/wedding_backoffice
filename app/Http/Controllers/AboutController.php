<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $abouts = About::all();
        return view( 'backoffice.about', compact( 'abouts' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

    }

    /**
    * Display the specified resource.
    *
    * @param  \App\About  $about
    * @return \Illuminate\Http\Response
    */

    public function show() {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\About  $about
    * @return \Illuminate\Http\Response
    */

    public function edit( About $about ) {
        return view( 'edit.about', compact( 'about' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\About  $about
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, About $about ) {
        $img = $request->file( 'img' );
        if ( $img != null ) {
            Storage::disk( 'public' )->delete( $about->img );
            $newName = Storage::disk( 'public' )->put( '', $img );
            $about->img = $newName;
        }
        $about->subtitle = $request->subtitle;
        $about->text = $request->text;
        $about->save();
        return redirect()->route( 'about.index' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\About  $about
    * @return \Illuminate\Http\Response
    */

    public function destroy() {
        //
    }
}
