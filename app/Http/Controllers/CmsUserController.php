<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsUserController extends Controller
{
    public function index(): View
    {
        $this->authorizeAdmin();

        return view('cms.users.index', [
            'users' => User::query()
                ->orderBy('name')
                ->orderBy('email')
                ->get(),
        ]);
    }

    public function create(): View
    {
        $this->authorizeAdmin();

        return view('cms.users.create', [
            'user' => new User(['role' => 'editor']),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->authorizeAdmin();

        User::create($this->validatedData($request));

        return redirect()->route('cms.users.index')->with('status', 'User created successfully.');
    }

    public function edit(User $user): View
    {
        $this->authorizeAdmin();

        return view('cms.users.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $this->authorizeAdmin();

        $data = $this->validatedData($request, $user);

        if ($this->isLastAdmin($user) && $data['role'] !== 'admin') {
            return redirect()
                ->route('cms.users.edit', $user)
                ->withErrors(['role' => 'At least one administrator must remain active.']);
        }

        $user->update($data);

        return redirect()->route('cms.users.index')->with('status', 'User updated successfully.');
    }

    public function destroy(User $user): RedirectResponse
    {
        $this->authorizeAdmin();

        if ($user->is(Auth::user())) {
            return redirect()->route('cms.users.index')->with('status', 'You cannot delete your own account.');
        }

        if ($this->isLastAdmin($user)) {
            return redirect()->route('cms.users.index')->with('status', 'At least one administrator must remain active.');
        }

        $user->delete();

        return redirect()->route('cms.users.index')->with('status', 'User deleted successfully.');
    }

    private function validatedData(Request $request, ?User $user = null): array
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user?->id)],
            'role' => ['required', Rule::in(['admin', 'editor'])],
            'password' => [$user ? 'nullable' : 'required', 'string', 'min:8', 'confirmed'],
        ]);

        if (blank($data['password'] ?? null)) {
            unset($data['password']);
        }

        return $data;
    }

    private function authorizeAdmin(): void
    {
        abort_unless(Auth::user()?->role === 'admin', 403);
    }

    private function isLastAdmin(User $user): bool
    {
        return $user->role === 'admin'
            && User::query()->where('role', 'admin')->count() <= 1;
    }
}
