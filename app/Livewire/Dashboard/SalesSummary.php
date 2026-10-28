<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class SalesSummary extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.sales-summary', [
            'salesBars' => [
                ['label' => '1–05 Sep', 'height' => 55],
                ['label' => '06–10 Sep', 'height' => 78],
                ['label' => '11–15 Sep', 'height' => 38],
                ['label' => '16–20 Sep', 'height' => 62],
                ['label' => '21–25 Sep', 'height' => 92],
                ['label' => '26–30 Sep', 'height' => 70],
            ],
        ]);
    }
}
