<section aria-label="Store metrics" class="grid gap-4 sm:grid-cols-3">
    @foreach ($metrics as $metric)
        <article class="rounded-2xl border border-[#252b3b] bg-[#161b26] p-5">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-slate-400">{{ $metric['label'] }}</p>
                <span @class([
                    'flex size-9 items-center justify-center rounded-xl',
                    'bg-indigo-500/15 text-indigo-300' => $metric['color'] === 'indigo',
                    'bg-orange-500/15 text-orange-300' => $metric['color'] === 'orange',
                    'bg-violet-500/15 text-violet-300' => $metric['color'] === 'violet',
                ])>
                    @if ($metric['icon'] === 'cart')
                        <svg class="size-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.7 13.4a2 2 0 0 0 2 1.6h9.7a2 2 0 0 0 2-1.6L23 6H6"/></svg>
                    @elseif ($metric['icon'] === 'dollar')
                        <svg class="size-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2v20m5-17H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    @else
                        <svg class="size-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 17 9 11l4 4 8-8"/><path d="M15 7h6v6"/></svg>
                    @endif
                </span>
            </div>
            <p class="mt-4 text-3xl font-semibold tracking-tight text-white">{{ $metric['value'] }}</p>
            <p class="mt-2 text-xs text-slate-500"><span class="font-medium text-emerald-400">↑ {{ $metric['change'] }}</span> <span class="ml-1">{{ $metric['comparison'] }}</span></p>
        </article>
    @endforeach
</section>
