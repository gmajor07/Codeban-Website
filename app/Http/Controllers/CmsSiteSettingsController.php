<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CmsSiteSettingsController extends Controller
{
    public function edit(): View
    {
        return view('cms.site-settings', [
            'settings' => SiteSetting::current(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'company_name' => ['nullable', 'string', 'max:150'],
            'tagline' => ['nullable', 'string', 'max:150'],
            'phone1' => ['nullable', 'string', 'max:50'],
            'phone2' => ['nullable', 'string', 'max:50'],
            'phone3' => ['nullable', 'string', 'max:50'],
            'email1' => ['nullable', 'email', 'max:150'],
            'email2' => ['nullable', 'email', 'max:150'],
            'email3' => ['nullable', 'email', 'max:150'],
            'website' => ['nullable', 'string', 'max:150'],
            'instagram' => ['nullable', 'string', 'max:100'],
            'address' => ['nullable', 'string'],
            'logo' => ['nullable', 'string', 'max:255'],
        ]);

        $settings = SiteSetting::query()->first() ?? new SiteSetting();
        $settings->fill($data);
        $settings->save();

        return redirect()->route('cms.settings.edit')->with('status', 'Site settings updated successfully.');
    }
}
