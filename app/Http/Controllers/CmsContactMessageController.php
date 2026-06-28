<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CmsContactMessageController extends Controller
{
    public function index(): View
    {
        return view('cms.messages.index', [
            'messages' => ContactMessage::query()
                ->latest('created_at')
                ->get(),
        ]);
    }

    public function show(ContactMessage $message): View
    {
        if ($message->status === 'new') {
            $message->update(['status' => 'read']);
        }

        return view('cms.messages.show', compact('message'));
    }

    public function markReplied(ContactMessage $message): RedirectResponse
    {
        $message->update(['status' => 'replied']);

        return redirect()->route('cms.messages.show', $message)->with('status', 'Message marked as replied.');
    }

    public function destroy(ContactMessage $message): RedirectResponse
    {
        $message->delete();

        return redirect()->route('cms.messages.index')->with('status', 'Message deleted successfully.');
    }
}
