<section id="transactions" class="overflow-hidden rounded-2xl border border-[#252b3b] bg-[#161b26]">
    <div class="flex flex-wrap items-center justify-between gap-3 p-5">
        <div>
            <h2 class="font-semibold text-white">Recent transactions</h2>
            <p class="mt-1 text-xs text-slate-500">Your latest customer orders</p>
        </div>
        <div class="flex items-center gap-2">
            <label>
                <span class="sr-only">Search transactions</span>
                <input type="search" wire:model.live.debounce.300ms="search" placeholder="Search..." class="w-32 rounded-lg border border-[#303748] bg-[#0f1219] px-3 py-2 text-xs text-slate-200 outline-none placeholder:text-slate-500 focus:border-indigo-500 sm:w-40">
            </label>
            <label>
                <span class="sr-only">Filter transactions by status</span>
                <select wire:model.live="statusFilter" class="rounded-lg border border-[#303748] bg-[#0f1219] px-3 py-2 text-xs text-slate-300 outline-none focus:border-indigo-500">
                    <option>All</option>
                    <option>Paid</option>
                    <option>Pending</option>
                    <option>Cancelled</option>
                </select>
            </label>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full min-w-[680px] text-left text-xs">
            <thead class="border-y border-[#252b3b] bg-white/[0.02] text-[10px] uppercase tracking-wider text-slate-500">
                <tr><th class="px-5 py-3 font-medium">Order</th><th class="px-4 py-3 font-medium">Customer</th><th class="px-4 py-3 font-medium">Product</th><th class="px-4 py-3 font-medium">Date</th><th class="px-4 py-3 font-medium">Amount</th><th class="px-5 py-3 font-medium">Status</th></tr>
            </thead>
            <tbody class="divide-y divide-[#252b3b]">
                @forelse ($transactions as $transaction)
                    <tr wire:key="transaction-{{ $transaction['id'] }}" class="transition hover:bg-white/[0.02]">
                        <td class="whitespace-nowrap px-5 py-3.5 font-medium text-slate-300">{{ $transaction['id'] }}</td>
                        <td class="whitespace-nowrap px-4 py-3.5"><span class="flex items-center gap-2.5"><span class="flex size-8 items-center justify-center rounded-full bg-slate-700 text-[10px] font-semibold text-slate-200">{{ $transaction['initials'] }}</span><span class="font-medium text-slate-200">{{ $transaction['name'] }}</span></span></td>
                        <td class="whitespace-nowrap px-4 py-3.5 text-slate-400">{{ $transaction['product'] }}</td>
                        <td class="whitespace-nowrap px-4 py-3.5 text-slate-500">{{ $transaction['date'] }}</td>
                        <td class="whitespace-nowrap px-4 py-3.5 font-medium text-slate-200">{{ $transaction['price'] }}</td>
                        <td class="whitespace-nowrap px-5 py-3.5">
                            <span @class([
                                'rounded-full px-2.5 py-1 text-[10px] font-medium',
                                'bg-emerald-500/10 text-emerald-300' => $transaction['status'] === 'Paid',
                                'bg-amber-500/10 text-amber-300' => $transaction['status'] === 'Pending',
                                'bg-rose-500/10 text-rose-300' => $transaction['status'] === 'Cancelled',
                            ])>{{ $transaction['status'] }}</span>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="px-5 py-8 text-center text-slate-500">No transactions match your filters.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
