@extends('layouts.app')
@section('title', 'Project showcase')

@section('content')

    {{--    Carousel section --}}
    <div class="container flex justify-center items-center mx-auto mt-[5rem]">
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative flex  h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/Frame282.jpg"
                         class="absolute block w-full rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/images/about-image.jpg"
                         class="absolute block rounded-xl w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/Frame282.jpg"
                         class="absolute block rounded-xl w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/about-image.jpg"
                         class="absolute block rounded-xl w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/Frame282.jpg"
                         class="absolute block rounded-xl w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180 " aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
            </button>
            <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
            </button>
        </div>
    </div>


    {{--    млади за активно општество section --}}


    <div class="container mx-auto   p-20  text-center">
        <h1 class="uppercase font-bold text-5xl">млади за активно општество</h1>
        <p class="py-20 w-1/2 mx-auto p-5 space-y-1">Проектот ќе се фокусира обезбедување и креирање на иновативна
            дигитална алатка која ќе обезбеди онлајн
            можност за учење на младите од партнерски земји за развој на заедницата, активно граѓанство и процеси на
            одлучување.</p>

    </div>

    {{--    goal of the project section --}}

    <div class="container mx-auto">
        <div class="container h-80 border-2 rounded-xl flex justify-between border-black">
            <div class="flex w-1/4 rounded-xl bg-black">
                <p class="text-white font-bold text-5xl text-left p-5">Цел на проектот</p>
            </div>

            <div class="flex w-2/3  mx-auto mt-10">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias at consectetur cumque
                    dolore, dolores ea eaque error eum eveniet expedita inventore iste iure non odio repudiandae rerum
                    similique suscipit veritatis, voluptatum? A aliquid assumenda consectetur consequatur distinctio
                    harum iste modi molestiae officia, omnis perspiciatis porro possimus repudiandae, sapiente
                    tenetur!</p>
            </div>
        </div>
    </div>


    {{--    Section with content and image --}}

    <div class="container gap-4 flex items-center  mx-auto py-20 ">
        <div class=" h-80 border-2 rounded-xl border-black p-20">
            <h3 class="font-bold text-5xl mb-5">За кого е наменет овој проект?</h3>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur beatae corporis eius
                laudantium
                libero odit pariatur ratione repellendus saepe vel. Adipisci asperiores consequatur error itaque maiores
                nulla sapiente soluta voluptatum.</p>
        </div>

        <div class="container:lg w-1/3 flex justify-center items-center">
            <img src="images/krik_za_koi_lica_1.jpg" alt="Image description" class="max-h-80">
        </div>
    </div>




    {{--    progress bar section --}}
    <div class="container w-full mx-auto gap-4 mt-8 p-10  px-10 flex justify-center items-center content-center">
        <div class="relative w-full  h-12 border-3 border-black rounded-full">
            <div class="h-full bg-orange rounded-full w-1/2"></div>
            <span class="absolute right-2 top-1/2 transform -translate-y-1/2 text-black font-bold ">50%</span>
        </div>
    </div>


    <div class="container mx-auto ">
        <div class="mt-4 flex justify-end space-x-4 items-center">
            <p class="text-lg font-bold">Заинтересиран/а си?</p>
{{--                redirect to application --}}
            <button class="mt-2 px-4 py-2 bg-black text-white font-bold  rounded-xl"><a href="#"> Пријави се!</a>

            </button>
        </div>

        <!-- Support Section -->
        <div class="mt-4 flex justify-end items-center space-x-4">
            <p class="text-lg font-bold">Сакаш да не поддржиш?</p>

            {{--                By clicking this button, the user will be navigated to the Donation Form Page.--}}

            <button class="mt-2 px-4 py-2 bg-red text-white font-bold rounded-xl"><a href="#">Донирај</a>

            </button>
        </div>
    </div>

    </div>



    <script>

        // carousel

        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.querySelector('[data-carousel="static"]');
            const items = carousel.querySelectorAll('[data-carousel-item]');
            const prevButton = carousel.querySelector('[data-carousel-prev]');
            const nextButton = carousel.querySelector('[data-carousel-next]');

            let currentIndex = 0;
            const totalItems = items.length;
            const updateCarousel = () => {
                items.forEach((item, index) => {
                    item.classList.add('hidden');
                    item.classList.remove('block');
                    if (index === currentIndex) {
                        item.classList.remove('hidden');
                        item.classList.add('block');
                    }
                });
            };

            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % totalItems;
                updateCarousel();
            });

            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalItems) % totalItems;
                updateCarousel();
            });

            updateCarousel();
        });
    </script>
@endsection
