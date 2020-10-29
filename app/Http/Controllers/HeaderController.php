<?php

namespace App\Http\Controllers;

use App\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $headers = Header::all();
        return view( 'backoffice.header', compact( 'headers' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view( 'create.header' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $request->validate( [
        'title'=>'required',
        'subtitle'=>'required',
        'subtitledate'=>'required',
        'date'=>'required',
        'img'=>'required',
        ], [
        'title.required'=>'Le Titre est obligatoire.',
        'subtitle.required'=>'Le sous titre est obligatoire.',
        'subtitledate.required'=>'Le sous titre date est obligatoire.',
        'date.required'=>'La date est obligatoire.',
        'img.required'=>'veuillez selectionner une image.',
        ] );
        $img = $request->file( 'img' );
        $newName = Storage::disk( 'public' )->put( '', $img );
        $header = new Header();
        $header->img = $newName;
        $header->title = $request->title;
        $header->subtitle = $request->subtitle;
        $header->subtitledate = $request->subtitledate;
        $header->date = $request->date;
        $header->save();
        return redirect()->route( 'header.index' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Header  $header
    * @return \Illuminate\Http\Response
    */

    public function show( Header $header ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Header  $header
    * @return \Illuminate\Http\Response
    */

    public function edit( Header $header ) {
        return view( 'edit.header', compact( 'header' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Header  $header
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Header $header ) {
        $img = $request->file( 'img' );
        if ( $img != null ) {
            Storage::disk( 'public' )->delete( $header->img );
            $newName = Storage::disk( 'public' )->put( '', $img );
            $header->img = $newName;
        }
        $header->title = $request->title;
        $header->subtitle = $request->subtitle;
        $header->subtitledate = $request->subtitledate;
        $header->date = $request->date;
        $header->save();
        return redirect()->route( 'header.index' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Header  $header
    * @return \Illuminate\Http\Response
    */

    public function destroy( Header $header ) {
        Storage::disk( 'public' )->delete( $header->img );
        $header->delete();
        return redirect()->back();
    }
}
