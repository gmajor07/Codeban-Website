<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Faq;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class PublicClientsController extends Controller
{
    public function index(): View
    {
        $clients = collect();
        $faqs = collect();
        $testimonials = collect();

        if (Schema::hasTable('clients')) {
            $clients = Client::query()
                ->where('status', 'active')
                ->orderBy('sort_order')
                ->orderBy('name')
                ->get();
        }

        if (Schema::hasTable('testimonials')) {
            $testimonials = Testimonial::query()
                ->where('status', 'active')
                ->orderBy('client_name')
                ->get();
        }

        if (Schema::hasTable('faqs')) {
            $faqs = Faq::query()
                ->where('page', 'clients')
                ->where('status', 'active')
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();
        }

        return view('elements', compact('clients', 'faqs', 'testimonials'));
    }
}
