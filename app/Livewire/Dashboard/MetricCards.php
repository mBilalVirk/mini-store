<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class MetricCards extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.metric-cards', [
            'metrics' => [
                ['label' => 'Total orders', 'value' => '1,250', 'change' => '10.5%', 'comparison' => 'vs. last month', 'icon' => 'cart', 'color' => 'indigo'],
                ['label' => 'Sales today', 'value' => '$2,430', 'change' => '8.2%', 'comparison' => 'vs. yesterday', 'icon' => 'dollar', 'color' => 'orange'],
                ['label' => 'Conversion rate', 'value' => '3.2%', 'change' => '0.8%', 'comparison' => 'vs. last month', 'icon' => 'trend', 'color' => 'violet'],
            ],
        ]);
    }
}
