<section id="products" class="rounded-2xl border border-[#252b3b] bg-[#161b26] p-5">
    <div class="mb-5 flex items-center justify-between">
        <div><h2 class="font-semibold text-white">Top products</h2><p class="mt-1 text-xs text-slate-500">Best sellers this month</p></div>
        <a href="#products" class="text-xs font-medium text-indigo-300 hover:text-indigo-200">View all</a>
    </div>
    <div class="space-y-4">
        @foreach ($products as $product)
            <div wire:key="top-product-{{ $loop->index }}" class="flex items-center gap-3">
                <span class="flex size-11 shrink-0 items-center justify-center rounded-xl {{ $product['color'] }}">
                    @if ($product['icon'] === 'headphones')
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 14v-3a9 9 0 0 1 18 0v3"/><path d="M5 14h2a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm14 0h-2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-5Z"/></svg>
                    @elseif ($product['icon'] === 'sparkles')
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m12 3 1.9 5.8L20 11l-6.1 2.2L12 19l-1.9-5.8L4 11l6.1-2.2L12 3Z"/><path d="m19 14 1.2 2.8L23 18l-2.8 1.2L19 22l-1.2-2.8L15 18l2.8-1.2L19 14Z"/></svg>
                    @else
                        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M8 2h8m-7 0v5l-4 7a5 5 0 0 0 4 8h6a5 5 0 0 0 4-8l-4-7V2"/><path d="M7 15h10"/></svg>
                    @endif
                </span>
                <div class="min-w-0 flex-1">
                    <p class="truncate text-xs font-medium text-slate-200">{{ $product['name'] }}</p>
                    <p class="mt-1 truncate text-[10px] text-slate-500">{{ $product['category'] }} <span class="mx-1">·</span> <span class="{{ $product['stock'] === 'Low stock' ? 'text-amber-300' : 'text-emerald-300' }}">{{ $product['stock'] }}</span></p>
                </div>
                <span class="shrink-0 text-xs font-semibold text-slate-200">{{ $product['price'] }}</span>
            </div>
        @endforeach
    </div>
</section>
