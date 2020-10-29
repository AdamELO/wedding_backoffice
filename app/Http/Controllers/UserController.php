<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function index() {
        return view( 'backoffice.adminpro' );
    }

    public function edit( $id ) {
        $user = User::all();
        return view( 'edit.admin', compact( 'user' ) );
    }

    public function update( $id ) {
        $user = User::find( $id );
        $user->name = request( 'name' );
        $user->email = request( 'email' );
        $user->password = bcrypt( request( 'password' ) );
        $user->save();
        return redirect()->route( 'adminpro.index' );
    }
}
