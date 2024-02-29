<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ActivityController extends Controller {
    public function add( User $user ): Response {
        return Inertia::render( 'Activities/Add', [
            'user' => $user,
        ] );
    }

    public function get() {
        return [
            'activities' => [
                'test',
                'test'
            ]
        ];
    }
}
