<div {{ $attributes->merge(['class' => 'p-4 border border-neutral-100 dark:border-neutral-700/40 rounded-2xl flex flex-col gap-5']) }}>
    @isset($header)
        <div>
            {{ $header }}
        </div>
    @endisset

    <div>
        {{ $slot }}
    </div>
</div>
