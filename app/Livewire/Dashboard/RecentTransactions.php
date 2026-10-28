<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class RecentTransactions extends Component
{
    public string $search = '';

    public string $statusFilter = 'All';

    public function render(): View
    {
        $transactions = [
            ['id' => '#9359', 'initials' => 'EW', 'name' => 'Esther Wilson', 'product' => 'SoundPro Speaker', 'date' => '21 Jul, 08:22', 'price' => '$40.00', 'status' => 'Paid'],
            ['id' => '#3933', 'initials' => 'AL', 'name' => 'Arlene Lee', 'product' => 'FlexBar Dumbbells', 'date' => '21 Jul, 10:11', 'price' => '$101.00', 'status' => 'Pending'],
            ['id' => '#5948', 'initials' => 'MJ', 'name' => 'Marjorie Jones', 'product' => 'BrewMate Coffee', 'date' => '21 Jul, 12:31', 'price' => '$112.00', 'status' => 'Paid'],
            ['id' => '#2798', 'initials' => 'SK', 'name' => 'Soham Khan', 'product' => 'GlowSkin Serum', 'date' => '21 Jul, 15:12', 'price' => '$10.00', 'status' => 'Cancelled'],
        ];

        $transactions = array_filter($transactions, function (array $transaction): bool {
            $matchesStatus = $this->statusFilter === 'All' || $transaction['status'] === $this->statusFilter;
            $search = strtolower(trim($this->search));
            $matchesSearch = $search === '' || str_contains(strtolower(implode(' ', $transaction)), $search);

            return $matchesStatus && $matchesSearch;
        });

        return view('livewire.dashboard.recent-transactions', [
            'transactions' => array_values($transactions),
        ]);
    }
}
