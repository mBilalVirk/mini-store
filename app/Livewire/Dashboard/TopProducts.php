<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class TopProducts extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.top-products', [
            'products' => [
                ['icon' => 'headphones', 'name' => 'Wireless Headphones', 'category' => 'Electronics', 'stock' => 'In stock', 'price' => '$63.00', 'color' => 'bg-indigo-500/15 text-indigo-300'],
                ['icon' => 'sparkles', 'name' => 'Premium Yoga Mat', 'category' => 'Fitness', 'stock' => 'In stock', 'price' => '$48.00', 'color' => 'bg-emerald-500/15 text-emerald-300'],
                ['icon' => 'bottle', 'name' => 'Steel Water Bottle', 'category' => 'Home & Kitchen', 'stock' => 'Low stock', 'price' => '$24.00', 'color' => 'bg-amber-500/15 text-amber-300'],
            ],
        ]);
    }
}
