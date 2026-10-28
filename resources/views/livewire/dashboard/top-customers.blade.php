<section id="customers" class="rounded-2xl border border-[#252b3b] bg-[#161b26] p-5">
    <div class="mb-5 flex items-center justify-between">
        <div><h2 class="font-semibold text-white">Top customers</h2><p class="mt-1 text-xs text-slate-500">By lifetime spend</p></div>
        <a href="#customers" class="text-xs font-medium text-indigo-300 hover:text-indigo-200">View all</a>
    </div>
    <div class="space-y-4">
        @foreach ($customers as $customer)
            <div wire:key="top-customer-{{ $loop->index }}" class="flex items-center gap-3">
                <span class="flex size-10 shrink-0 items-center justify-center rounded-full text-xs font-semibold {{ $customer['color'] }}">{{ $customer['initials'] }}</span>
                <div class="min-w-0 flex-1">
                    <p class="truncate text-xs font-semibold text-slate-200">{{ $customer['name'] }}</p>
                    <p class="mt-1 truncate text-[10px] text-slate-500">{{ $customer['email'] }}</p>
                </div>
                <div class="shrink-0 text-right">
                    <p class="text-xs font-semibold text-slate-200">{{ $customer['spent'] }}</p>
                    <p class="mt-1 text-[10px] text-slate-500">{{ $customer['orders'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
