<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsClientController extends Controller
{
    public function index(): View
    {
        return view('cms.clients.index', [
            'clients' => Client::query()
                ->orderBy('sort_order')
                ->orderBy('name')
                ->get(),
        ]);
    }

    public function create(): View
    {
        return view('cms.clients.create', [
            'client' => new Client(['status' => 'active', 'sort_order' => 0]),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Client::create($this->validatedData($request));

        return redirect()->route('cms.clients.index')->with('status', 'Client created successfully.');
    }

    public function edit(Client $client): View
    {
        return view('cms.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client): RedirectResponse
    {
        $client->update($this->validatedData($request, $client));

        return redirect()->route('cms.clients.index')->with('status', 'Client updated successfully.');
    }

    public function destroy(Client $client): RedirectResponse
    {
        if ($client->logo && str_starts_with($client->logo, 'storage/clients/')) {
            Storage::disk('public')->delete(str_replace('storage/', '', $client->logo));
        }

        $client->delete();

        return redirect()->route('cms.clients.index')->with('status', 'Client deleted successfully.');
    }

    private function validatedData(Request $request, ?Client $client = null): array
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'logo' => ['nullable', 'file', 'mimes:jpg,jpeg,png,webp,gif,svg', 'max:4096'],
            'website' => ['nullable', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);

        $data['sort_order'] = $data['sort_order'] ?? 0;

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('clients', 'public');
            $data['logo'] = 'storage/'.$path;

            if ($client?->logo && str_starts_with($client->logo, 'storage/clients/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $client->logo));
            }
        } else {
            unset($data['logo']);
        }

        return $data;
    }
}
