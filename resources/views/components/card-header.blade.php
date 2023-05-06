@props([
    'title',
    'link',
])

<div class="flex gap-5 items-center justify-between">
    <div>
        <h3 {{ $title->attributes->merge(['class' => 'text-sm font-semibold text-neutral-800 dark:text-neutral-100']) }}>
            {{ $title }}
        </h3>
    </div>
    <div>
        @isset($link)
            <a {{ $link->attributes->merge(['class' => 'inline-flex items-center text-sm text-neutral-500 hover:text-neutral-600 dark:hover:text-neutral-300']) }}>
                {{ $link }}
            </a>
        @endisset
    </div>
</div>
