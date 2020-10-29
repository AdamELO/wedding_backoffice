<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class header extends JsonResource {
    public function rules() {
        return [
            'email' => 'required|email|unique:invitations'
        ];
    }

    public function messages() {
        return [
            'email.unique' => 'Invitation with this email address already requested.'
        ];
    }
}