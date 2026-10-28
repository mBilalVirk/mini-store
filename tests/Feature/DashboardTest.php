<?php

namespace Tests\Feature;

use App\Livewire\Dashboard;
use App\Livewire\Dashboard\RecentTransactions;
use Livewire\Livewire;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    public function test_dashboard_renders_as_a_livewire_page(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSeeLivewire(Dashboard::class)
            ->assertSee('Recent transactions')
            ->assertSee('Top products');
    }

    public function test_recent_transactions_can_be_searched_and_filtered(): void
    {
        Livewire::test(RecentTransactions::class)
            ->set('search', 'Esther')
            ->assertSee('Esther Wilson')
            ->assertDontSee('Arlene Lee')
            ->set('search', '')
            ->set('statusFilter', 'Pending')
            ->assertSee('Arlene Lee')
            ->assertDontSee('Esther Wilson');
    }
}
