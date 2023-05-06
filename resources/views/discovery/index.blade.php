<x-app-layout>
    <main class="text-neutral-900 dark:text-white bg-white dark:bg-neutral-950 flex flex-col items-center gap-16 pt-24 pb-40 md:py-30">
        <div class="flex flex-col gap-16 items-center px-8 w-full max-w-screen-sm md:gap-12 md:px-6">
            <header class="flex flex-col gap-6 items-center px-3 w-full">
                <a href="/" class="flex">
                    <img class="rounded-full h-24" src="/images/avatar.webp">
                </a>
                <h1 class="text-4xl font-semibold tracking-tight text-neutral-800 dark:text-neutral-100 max-w-sm">
                    Mario Bondia
                </h1>
                <h2 class="text-center max-w-sm">
                    Experimentado diseñador UX ubicado en México. Conocido por crear experiencias de usuario atractivas e intuitivas.
                </h2>
                <div class="flex justify-center gap-4">
                    <a class="border border-neutral-900/10 dark:border-neutral-700 shadow-md rounded-md py-3 px-6 bg-white hover:bg-neutral-100 dark:bg-neutral-700/[0.15] dark:hover:bg-neutral-700 text-sm font-semibold text-neutral-900 dark:text-neutral-200" href="#">
                        Website
                    </a>
                    <a class="border border-neutral-900/10 dark:border-neutral-700 shadow-md rounded-md py-3 px-6 bg-white hover:bg-neutral-100 dark:bg-neutral-700/[0.15] dark:hover:bg-neutral-700 text-sm font-semibold text-neutral-900 dark:text-neutral-200" href="#">
                        Email
                    </a>
                </div>
            </header>

            <div class="w-full flex flex-col gap-4">
                <x-link-item>
                    <x-slot:title>iOS Icons</x-slot>
                    <x-slot:description>Un precioso conjunto de iconos exclusivos para iOS.</x-slot>
                    <x-slot:image src="/images/ios-icons.webp" alt=""></x-slot>
                    <x-slot:link href="#">Comprar</x-slot>
                </x-link-item>

                <x-link-item>
                    <x-slot:title>macOS Icons</x-slot>
                    <x-slot:description>Un conjunto de 48 iconos personalizados para macOS.</x-slot>
                    <x-slot:image src="/images/mac-icons.webp" alt=""></x-slot>
                    <x-slot:link href="#">Comprar</x-slot>
                </x-link-item>

                <x-link-item>
                    <x-slot:title>Lightroom Presets</x-slot>
                    <x-slot:description>8 presets para Lightroom que mejorarán tus fotografías.</x-slot>
                    <x-slot:image src="/images/lightroom-presets.webp" alt=""></x-slot>
                    <x-slot:link href="#">Ver</x-slot>
                </x-link-item>

                <x-card>
                    <x-slot name="header">
                        <x-card-header>
                            <x-slot:title>Último video</x-slot>

                            <x-slot:link href="#">
                                Youtube <x-icon-right-arrow class="w-4 h-4 ml-1" />
                            </x-slot>
                        </x-card-header>
                    </x-slot>

                    <div class="rounded-md overflow-hidden">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/rIfdg_Ot-LI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </x-card>

                <x-card>
                    <x-slot name="header">
                        <x-card-header>
                            <x-slot:title>Galería</x-slot>

                            <x-slot:link href="/web">
                                Ver más <x-icon-right-arrow class="w-4 h-4 ml-1" />
                            </x-slot>
                        </x-card-header>
                    </x-slot>

                    <div x-data="yoink">
                        <section x-ref="shtoilst" class="splide" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img class="object-cover rounded-md h-48 w-96" src="https://images.unsplash.com/photo-1683319522052-7ecf311829a3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=968&q=80" alt="placeholder image">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="object-cover rounded-md h-48 w-96" src="https://images.unsplash.com/photo-1682686580849-3e7f67df4015?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80" alt="placeholder image">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="object-cover rounded-md h-48 w-96" src="https://images.unsplash.com/photo-1683610960469-948a0c541f86?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="placeholder image">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="object-cover rounded-md h-48 w-96" src="https://images.unsplash.com/photo-1683011149602-ac15c7c5b078?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2369&q=80" alt="placeholder image">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </x-card>

                <x-card>
                    <x-slot name="header">
                        <x-card-header>
                            <x-slot:title>Nuevo episodio del podcast</x-slot>

                            <x-slot:link href="#">
                                Ver todo <x-icon-right-arrow class="w-4 h-4 ml-1" />
                            </x-slot>
                        </x-card-header>
                    </x-slot>

                    <div>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/10sDtdbt704pzbfxw1Npt4?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </x-card>

                <div class="flex w-full justify-between gap-4">
                    <x-social-link-item href="/">
                        <x-icon-twitter class="h-6 w-6" />
                    </x-social-link-item>

                    <x-social-link-item href="/">
                        <x-icon-youtube class="h-6 w-6" />
                    </x-social-link-item>

                    <x-social-link-item href="/">
                        <x-icon-instagram class="h-6 w-6" />
                    </x-social-link-item>

                    <x-social-link-item href="/">
                        <x-icon-facebook class="h-6 w-6" />
                    </x-social-link-item>

                    <x-social-link-item href="/">
                        <x-icon-phone class="h-6 w-6" />
                    </x-social-link-item>
                </div>

                <x-card>
                    <x-slot name="header">
                        <x-card-header>
                            <x-slot:title>Suscríbete al newsletter</x-slot>
                        </x-card-header>
                    </x-slot>

                    <div class="flex w-full gap-4">
                        <input class="rounded-md border-neutral-900/10 flex-1 text-sm h-10 shadow-md dark:border-neutral-700 dark:bg-neutral-700/[0.15] dark:text-neutral-200 dark:placeholder:text-neutral-500" type="text" name="email" placeholder="Dirección de email">
                        <button class="text-sm font-semibold text-neutral-100 bg-neutral-800 border border-neutral-800 hover:bg-neutral-700 hover:border-neutral-700 rounded-md px-4 h-10">
                            Suscribirse ahora
                        </button>
                    </div>
                </x-card>
            </div>

            <div class="flex gap-4 text-sm">
                <div class="flex gap-1">
                    <span>Construido en</span>
                    <a href="https://laravel.com" class="text-neutral-500 hover:text-neutral-900 dark:hover:text-neutral-100">Laravel</a>
                </div>
                <div class="flex gap-1">
                    <span>Hecho por</span>
                    <a href="https://twitter.com/oliverservin_" class="text-neutral-500 hover:text-neutral-900 dark:hover:text-neutral-100">Oliver Servín</a>
                </div>
                <div class="flex gap-1">
                    <span class="text-neutral-500">©{{ date('Y') }} Yoyo Template</span>
                </div>
            </div>
        </div>
    </main>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('yoink', () => ({
                init() {
                    new Splide(this.$refs.shtoilst, {
                        perPage: 2,
                        gap: '0.5rem',
                        breakpoints: {
                            640: {
                                perPage: 1,
                            },
                        },
                    }).mount()
                },
            }))
        })
    </script>
</x-app-layout>
