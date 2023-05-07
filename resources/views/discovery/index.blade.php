<x-app-layout>
    <main class="flex flex-col items-center gap-16 pt-24 pb-40 md:py-30">
        <div class="flex flex-col gap-16 items-center px-8 w-full max-w-screen-sm md:gap-12 md:px-6">
            <header class="flex flex-col gap-6 items-center px-3 w-full">
                <a href="/" class="flex">
                    <img class="rounded-full h-24" src="https://framerusercontent.com/images/lFcgmnSNMxgS8b8a78iKsMuURd0.webp">
                </a>
                <h1 class="text-4xl font-semibold tracking-tight text-neutral-900 max-w-sm">
                    Chris Linx
                </h1>
                <h2 class="text-center max-w-sm">
                    Experimentado diseñador UX ubicado en México. Conocido por crear experiencias de usuario atractivas e intuitivas.
                </h2>
                <div class="flex justify-center gap-4">
                    <a class="border border-neutral-300 rounded py-3 px-6 bg-neutral-100 text-sm font-semibold text-neutral-900" href="#">
                        Website
                    </a>
                    <a class="border border-neutral-300 rounded py-3 px-6 text-sm font-semibold text-neutral-900" href="#">
                        Email
                    </a>
                </div>
            </header>

            <div class="w-full flex flex-col gap-4">
                <x-card>
                    <x-link-item>
                        <x-slot:title>Canvas Supply</x-slot>
                        <x-slot:description>Framer Resources</x-slot>
                        <x-slot:image src="https://framerusercontent.com/images/hDQUaWouoxyIThqey4W06r9HIM.webp" alt=""></x-slot>
                        <x-slot:link href="#">Ver</x-slot>
                    </x-link-item>
                </x-card>

                <x-card>
                    <x-link-item>
                        <x-slot:title>DashFolio</x-slot>
                        <x-slot:description>The original dashboard-styled Framer Template.</x-slot>
                        <x-slot:image src="https://framerusercontent.com/images/vftCZbEK2ive6knUUTRekPAGwj8.webp" alt=""></x-slot>
                        <x-slot:link href="#">Comprar</x-slot>
                    </x-link-item>
                </x-card>

                <x-card>
                    <x-link-item>
                        <x-slot:title>Godlike</x-slot>
                        <x-slot:description>Build Websites at Godlike Speed.</x-slot>
                        <x-slot:image src="https://framerusercontent.com/images/fxcaCZXYS9IfOcU9diSBiIGo84.webp" alt=""></x-slot>
                        <x-slot:link href="#">Ver</x-slot>
                    </x-link-item>
                </x-card>

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
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Jvl_pFssI5w?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                                        <img class="w-full rounded-md" src="https://picsum.photos/800/400?random=1" alt="placeholder image">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="w-full rounded-md" src="https://picsum.photos/800/400?random=1" alt="placeholder image">
                                    </li>
                                    <li class="splide__slide">
                                        <img class="w-full rounded-md" src="https://picsum.photos/800/400?random=1" alt="placeholder image">
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
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0mO6oS60RST2sWmN2FKknP?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </x-card>

                <div class="flex w-full justify-between gap-4">
                    <div class="w-full flex justify-center border border-neutral-300 bg-neutral-100 p-3 rounded-md">
                        <a class="h-[80px] flex items-center text-neutral-500" href="#">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 575 512">
                                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="w-full flex justify-center border border-neutral-300 bg-neutral-100 p-3 rounded-md">
                        <a class="h-[80px] flex items-center text-neutral-500" href="#">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 575 512">
                                <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="w-full flex justify-center border border-neutral-300 bg-neutral-100 p-3 rounded-md">
                        <a class="h-[80px] flex items-center text-neutral-500" href="#">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="w-full flex justify-center border border-neutral-300 bg-neutral-100 p-3 rounded-md">
                        <a class="h-[80px] flex items-center text-neutral-500" href="#">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="w-full flex justify-center border border-neutral-300 bg-neutral-100 p-3 rounded-md">
                        <a class="h-[80px] flex items-center text-neutral-500" href="#">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <x-card>
                    <div class="flex w-full gap-1">
                        <input class="rounded-md border-neutral-300 flex-1 text-sm h-12" type="text" name="email" placeholder="Suscríbete al newsletter">
                        <button class="text-sm font-semibold text-neutral-900 bg-white border border-neutral-300 rounded-md px-4 h-12">
                            Suscribirse ahora
                        </button>
                    </div>
                </x-card>
            </div>

            <div class="flex gap-4 text-sm">
                <div class="flex gap-1">
                    <span>Construido en</span>
                    <a href="#" class="text-neutral-500 hover:text-neutral-900">Laravel</a>
                </div>
                <div class="flex gap-1">
                    <span>Hecho por</span>
                    <a href="https://twitter.com/oliverservin_" class="text-neutral-500 hover:text-neutral-900">Oliver Servín</a>
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
