@props([
    'title',
    'link',
])

<div class="flex gap-5 items-center justify-between">
    <div>
        <h3 {{ $title->attributes->merge(['class' => 'text-sm font-semibold text-neutral-900']) }}>
            {{ $title }}
        </h3>
    </div>
    <div>
        <a {{ $link->attributes->merge(['class' => 'inline-flex items-center text-sm text-neutral-500']) }}>
            {{ $link }}
        </a>
    </div>
</div>
