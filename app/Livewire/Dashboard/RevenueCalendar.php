<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class RevenueCalendar extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.revenue-calendar');
    }
}
