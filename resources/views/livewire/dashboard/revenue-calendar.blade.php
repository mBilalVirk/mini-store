<div class="flex flex-col gap-5">
    <section class="rounded-2xl border border-[#252b3b] bg-[#161b26] p-5">
        <div class="mb-4 flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-white">Revenue</h2>
                <p class="mt-1 text-xs text-slate-400">Total revenue this month</p>
            </div>
            <span class="flex size-9 items-center justify-center rounded-xl bg-indigo-500/15 text-indigo-200">
                <svg class="size-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
            </span>
        </div>
        <div class="flex items-center justify-between rounded-xl bg-gradient-to-br from-blue-600 to-indigo-500 p-4 text-white">
            <div><p class="text-xs text-indigo-100">Total revenue</p><p class="mt-1 text-2xl font-semibold">$24,544</p></div>
            <span class="rounded-lg bg-white/15 px-2 py-1 text-xs font-medium">↑ 12.8%</span>
        </div>
    </section>

    <section id="calendar" class="rounded-2xl border border-[#252b3b] bg-[#161b26] p-5">
        <div class="mb-4 flex items-center justify-between">
            <div class="flex items-center gap-2 text-sm font-semibold text-white">
                <svg class="size-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                September 2024
            </div>
            <span class="text-xs text-slate-500">‹ &nbsp; ›</span>
        </div>
        <div class="grid grid-cols-7 gap-1 text-center text-[10px]">
            @foreach (['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'] as $day)
                <span wire:key="calendar-weekday-{{ $day }}" class="py-1 font-medium text-slate-500">{{ $day }}</span>
            @endforeach
            @foreach (range(2, 29) as $day)
                <span wire:key="calendar-day-{{ $day }}" class="rounded-md py-1.5 {{ $day === 24 ? 'bg-indigo-500 font-semibold text-white' : 'text-slate-400' }}">{{ $day }}</span>
            @endforeach
        </div>
    </section>
</div>
