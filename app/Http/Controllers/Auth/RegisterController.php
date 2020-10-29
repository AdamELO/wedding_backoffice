<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Invitation;
use App\Mail\Email;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
    * Where to redirect users after registration.
    *
    * @var string
    */
    protected $redirectTo = '/profil';

    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct() {
        $this->middleware( 'guest' );
    }
    /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
    protected function validator( array $data ) {
        return Validator::make( $data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ] );
    }

    /**
    * Create a new user instance after a valid registration.
    *
    * @param  array  $data
    * @return \App\User
    */
    protected function create( array $data ) {
        $users = User::all();
        if ( count( $users ) == 0 ) {
            $roleId = 1;
        } else {
            $roleId = 2;
        }
        $user =  User::create( [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make( $data['password'] ),
            'role_id' => $roleId
        ] );
        return $user;
    }

    public function requestInvitation() {
        return view( 'auth.request' );
    }

    public function showRegistrationForm( Request $request ) {
        $invitation_token = $request->get( 'invitation_token' );
        $invitation = Invitation::where( 'invitation_token', $invitation_token )->firstOrFail();
        $email = $invitation->email;
        $name = $invitation->name;

        return view( 'auth.register', compact( 'email','name' ) );
    }
}
