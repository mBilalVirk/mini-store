<section id="orders" class="rounded-2xl border border-[#252b3b] bg-[#161b26] p-5">
    <div class="mb-5 flex items-center justify-between">
        <div><h2 class="font-semibold text-white">Orders overview</h2><p class="mt-1 text-xs text-slate-500">Order status breakdown</p></div>
        <button type="button" aria-label="More order options" class="text-lg leading-none text-slate-500 hover:text-white">···</button>
    </div>
    <div class="space-y-4">
        @foreach ($statuses as $status)
            <div wire:key="order-status-{{ strtolower($status['name']) }}">
                <div class="mb-2 flex items-center justify-between text-xs">
                    <span class="text-slate-400">{{ $status['name'] }}</span>
                    <span class="font-medium text-slate-200">{{ $status['count'] }} <span class="ml-1 text-slate-500">{{ $status['percent'] }}%</span></span>
                </div>
                <div class="h-1.5 overflow-hidden rounded-full bg-white/[0.06]"><div class="h-full rounded-full bg-gradient-to-r from-orange-500 to-amber-400" style="width: {{ $status['percent'] }}%"></div></div>
            </div>
        @endforeach
    </div>
</section>
