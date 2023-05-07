<div class="p-4 border border-neutral-300 rounded-md bg-neutral-100 flex flex-col gap-5">
    @isset($header)
        <div>
            {{ $header }}
        </div>
    @endisset

    <div>
        {{ $slot }}
    </div>
</div>
