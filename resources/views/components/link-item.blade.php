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
        <p class="text-neutral-600 text-sm">
            {{ $description }}
        </p>
    </div>
    <div>
        <a {{ $link->attributes->merge(['class' => 'inline-flex border border-neutral-50 bg-neutral-50 hover:border-nuetral-100 hover:bg-neutral-100 py-2.5 px-4 rounded-md text-sm font-semibold text-neutral-900 min-w-[100px] justify-center']) }}>
            {{ $link }}
        </a>
    </div>
</div>
