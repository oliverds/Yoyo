@props([
    'title',
    'description',
    'image',
    'link',
])

<x-card class="relative">
    <div class="flex gap-5 items-center">
        <div>
            <img {{ $image->attributes->merge(['class' => 'object-cover h-12 w-12 rounded-md']) }}>
        </div>
        <div class="flex-1">
            <h3 class="text-sm font-semibold text-neutral-800 dark:text-neutral-100">
                {{ $title }} {{ $image }}
            </h3>
            <p class="text-neutral-600 dark:text-neutral-400 text-sm">
                {{ $description }}
            </p>
        </div>
        <div>
            <a {{ $link->attributes->merge(['class' => 'inline-flex border border-neutral-50 bg-neutral-50 dark:border-neutral-800/50 dark:bg-neutral-800/50 hover:border-nuetral-100 hover:bg-neutral-100 dark:hover:border-neutral-800 dark:hover:bg-neutral-800 py-2.5 px-4 rounded-md text-sm font-semibold text-neutral-900 dark:text-neutral-300 min-w-[100px] justify-center']) }}>
                <span class="absolute inset-0"></span>
                <span>{{ $link }}</span>
            </a>
        </div>
    </div>
</x-card>
