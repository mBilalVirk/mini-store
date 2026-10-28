<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class OrderOverview extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.order-overview', [
            'statuses' => [
                ['name' => 'Delivered', 'count' => '750', 'percent' => 60],
                ['name' => 'Shipped', 'count' => '250', 'percent' => 20],
                ['name' => 'Pending', 'count' => '188', 'percent' => 15],
                ['name' => 'Cancelled', 'count' => '63', 'percent' => 5],
            ],
        ]);
    }
}
