@props([
    'title',
    'description',
    'image',
    'link',
])

<div class="flex gap-5 items-center">
    <div>
        <img {{ $image->attributes->merge(['class' => 'object-cover h-12 w-12 rounded-md']) }}>
    </div>
    <div class="flex-1">
        <h3 class="text-sm font-semibold text-neutral-900">
            {{ $title }} {{ $image }}
        </h3>
        <p class="text-neutral-500 text-sm">
            {{ $description }}
        </p>
    </div>
    <div>
        <a {{ $link->attributes->merge(['class' => 'inline-block border border-neutral-300 py-2.5 px-6 rounded-md text-sm font-semibold text-neutral-900']) }}>
            {{ $link }}
        </a>
    </div>
</div>
