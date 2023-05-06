<div class="relative w-full flex justify-center border dark:border-neutral-700/40 p-3 rounded-md">
    <a {{ $attributes->whereStartsWith('href') }} class="h-[80px] flex items-center text-neutral-500 hover:text-neutral-600 dark:hover:text-neutral-300">
        <span class="absolute inset-0"></span>
        {{ $slot }}
    </a>
</div>
