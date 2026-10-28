<section id="sales" class="min-w-0 rounded-2xl border border-[#252b3b] bg-[#161b26] p-5">
    <div class="mb-5 flex items-center justify-between gap-3">
        <div>
            <h2 class="font-semibold text-white">Sales summary</h2>
            <p class="mt-1 text-xs text-slate-500">Revenue performance over the month</p>
        </div>
        <button type="button" class="shrink-0 rounded-lg border border-[#303748] px-3 py-2 text-xs font-medium text-slate-300 transition hover:bg-white/5">This month <span class="ml-1 text-slate-500">⌄</span></button>
    </div>
    <div class="flex h-56 gap-3">
        <div class="flex flex-col justify-between pb-8 text-right text-[10px] text-slate-500">
            <span>$13k</span><span>$10k</span><span>$7k</span><span>$4k</span><span>$1k</span>
        </div>
        <div class="relative grid min-w-0 flex-1 grid-cols-6 items-end gap-2 border-b border-l border-[#252b3b] px-2 pb-0 sm:gap-4 sm:px-4">
            <div class="absolute inset-x-0 top-0 flex h-[calc(100%-32px)] flex-col justify-between" aria-hidden="true">
                <span class="border-t border-dashed border-[#252b3b]"></span><span class="border-t border-dashed border-[#252b3b]"></span><span class="border-t border-dashed border-[#252b3b]"></span><span class="border-t border-dashed border-[#252b3b]"></span><span class="border-t border-dashed border-[#252b3b]"></span>
            </div>
            @foreach ($salesBars as $bar)
                <div wire:key="sales-bar-{{ $loop->index }}" class="relative z-10 flex h-full min-w-0 flex-col items-center justify-end gap-2">
                    <div class="w-full max-w-10 rounded-t-md {{ $loop->iteration === 4 ? 'bg-indigo-500' : 'bg-indigo-300/80' }}" style="height: {{ $bar['height'] }}%"></div>
                    <span class="whitespace-nowrap text-[9px] text-slate-500 sm:text-[10px]">{{ $bar['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mt-4 flex items-center justify-center gap-5 text-xs text-slate-400">
        <span class="flex items-center gap-2"><span class="size-2 rounded-full bg-indigo-300"></span>Sales</span>
        <span class="flex items-center gap-2"><span class="size-2 rounded-full bg-indigo-500"></span>This week</span>
    </div>
</section>
