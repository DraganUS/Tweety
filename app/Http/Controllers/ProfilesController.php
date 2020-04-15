<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        request()->validate([
            'username' => [
                'string',
                'require',
                'max:225',
                'alpha_dash',
                Rule::unique('users')->ignore($user)
            ],
            'name' =>[
                'string',
                'require',
                'max:225',

            ],
            'email' =>[
                'string',
                'require',
                'email',
                'max:225',
                Rule::unique('users')->ignore($user)
            ],
            'password' => [
                'string',
                'required',
                'min:8',
                'max:225',
                'conformed'
            ]
        ]);
    }
}
