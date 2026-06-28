<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class PublicServicesController extends Controller
{
    public function index(): View
    {
        $services = collect();
        $faqs = collect();

        if (Schema::hasTable('services')) {
            $services = Service::query()
                ->where('status', 'active')
                ->orderBy('sort_order')
                ->orderBy('title')
                ->get();
        }

        if (Schema::hasTable('faqs')) {
            $faqs = Faq::query()
                ->where('page', 'services')
                ->where('status', 'active')
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();
        }

        return view('services', [
            'services' => $services,
            'faqs' => $faqs,
        ]);
    }
}
