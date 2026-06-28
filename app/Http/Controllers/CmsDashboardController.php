<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class CmsDashboardController extends Controller
{
    public function index(): View
    {
        return view('cms.dashboard', [
            'stats' => [
                'products' => $this->countTable('products'),
                'services' => $this->countTable('services'),
                'clients' => $this->countTable('clients'),
                'testimonials' => $this->countTable('testimonials'),
                'faqs' => $this->countTable('faqs'),
                'messages' => $this->countTable('contact_messages'),
                'gallery' => $this->countTable('gallery'),
            ],
            'newMessages' => $this->countTableWhere('contact_messages', 'status', 'new'),
        ]);
    }

    private function countTable(string $table): int
    {
        if (! Schema::hasTable($table)) {
            return 0;
        }

        return DB::table($table)->count();
    }

    private function countTableWhere(string $table, string $column, string $value): int
    {
        if (! Schema::hasTable($table) || ! Schema::hasColumn($table, $column)) {
            return 0;
        }

        return DB::table($table)->where($column, $value)->count();
    }
}
