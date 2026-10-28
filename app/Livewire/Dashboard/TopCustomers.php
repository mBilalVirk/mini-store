<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class TopCustomers extends Component
{
    public function render(): View
    {
        return view('livewire.dashboard.top-customers', [
            'customers' => [
                ['initials' => 'JD', 'name' => 'Jordan Davis', 'email' => 'jordan.davis@email.com', 'spent' => '$8,750', 'orders' => '45 orders', 'color' => 'bg-violet-500/20 text-violet-200'],
                ['initials' => 'AM', 'name' => 'Alex Morgan', 'email' => 'alex.morgan@email.com', 'spent' => '$6,240', 'orders' => '32 orders', 'color' => 'bg-sky-500/20 text-sky-200'],
            ],
        ]);
    }
}
