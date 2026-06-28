<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class CmsAuthController extends Controller
{
    public function showLogin(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('cms.dashboard');
        }

        return view('cms-login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! $this->passwordMatches($user, $credentials['password'])) {
            throw ValidationException::withMessages([
                'email' => 'These login details do not match our records.',
            ]);
        }

        if (! in_array($user->role, ['admin', 'editor'], true)) {
            throw ValidationException::withMessages([
                'email' => 'This account cannot access the CMS.',
            ]);
        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended(route('cms.dashboard'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    private function passwordMatches(User $user, string $password): bool
    {
        if (Hash::check($password, $user->password)) {
            return true;
        }

        if (hash_equals((string) $user->password, $password)) {
            $user->password = Hash::make($password);
            $user->save();

            return true;
        }

        return false;
    }
}
