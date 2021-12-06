<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SocialLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::firstOrNew(['google_id' => $googleUser->getId()]);
        if (!$user->exists) {
            $user->name = $googleUser->getName();
            $user->email = $googleUser->getEmail();
            $user->save();
        }

        Auth::login($user);
        return redirect()->route('admin');
    }
}
