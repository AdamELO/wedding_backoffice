<?php

namespace App\Http\Controllers;

use App\Invitation;
use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvitationsController extends Controller {
    public function store( Request $request ) {
        $request->validate( [
            'email'=>'required|email|unique:invitations',
            'name'=>'required',
        ], [
            'email.required'=>'Le champ email est obligatoire.',
            'email.email'=>'Saisissez une adresse email valide.',
            'email.unique'=>'Invitation avec cette adresse e-mail déjà demandée.',
            'name.required' => 'Le champ nom est obligatoire',
        ] );
        $invitation = new Invitation( $request->all() );
        $invitation->generateInvitationToken();
        Mail::to( $request->email )->send(new Email($request->name, $invitation->getLink()));
        $invitation->save();
        return redirect()->route( 'requestInvitation' )->with( 'success', 'Un mail avec votre invitation a été envoyé' );
    }
}
