<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsFaqController extends Controller
{
    public function index(): View
    {
        return view('cms.faqs.index', [
            'faqs' => Faq::query()
                ->orderBy('page')
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get(),
        ]);
    }

    public function create(): View
    {
        return view('cms.faqs.create', [
            'faq' => new Faq(['page' => 'services', 'sort_order' => 0, 'status' => 'active']),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Faq::create($this->validatedData($request));

        return redirect()->route('cms.faqs.index')->with('status', 'FAQ created successfully.');
    }

    public function edit(Faq $faq): View
    {
        return view('cms.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq): RedirectResponse
    {
        $faq->update($this->validatedData($request));

        return redirect()->route('cms.faqs.index')->with('status', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq): RedirectResponse
    {
        $faq->delete();

        return redirect()->route('cms.faqs.index')->with('status', 'FAQ deleted successfully.');
    }

    private function validatedData(Request $request): array
    {
        $data = $request->validate([
            'page' => ['required', Rule::in(['services', 'clients'])],
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);

        $data['sort_order'] = $data['sort_order'] ?? 0;

        return $data;
    }
}
