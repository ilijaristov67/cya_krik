@extends('layouts.app');


@section('content')

    <div class="h-[100px]"></div>

    <div class="container flex justify-center  space-x-20 mx-auto">
        <div>
            <img src="images/krikvest1.jpg" alt="">
        </div>

        <div class="container    mb-52 w-1/3 py-5 ">
            <p class="border-3 border-black px-5 rounded-xl font-bold w-32  ">03.08.2023</p>
            <h3 class="font-bold text-4xl py-5">Lorem ipsum dolor sit amet, consectetur</h3>
            <p class="text-xl space-y-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolores hic
                maiores numquam quo sed sint voluptatibus! Amet beatae culpa delectus dolor et, impedit ipsa numquam
                possimus, provident quae quo repellat repudiandae, rerum ut velit! A aspernatur aut consequatur iste
                iure laboriosam laudantium nostrum veniam! Commodi deleniti facere maiores maxime mollitia,
                necessitatibus quos vero vitae voluptatem! Alias animi et magnam minus molestiae odit officiis repellat
                sed soluta, voluptates? A ad aliquid aspernatur assumenda aut commodi, fugit harum laudantium magnam
                modi nihil optio quidem quo sapiente sint tempore vitae? Adipisci aliquam dolorem veniam. Eaque facere
                fuga illo ipsam iure nisi vero.</p>
        </div>
    </div>


    <div class="container flex justify-center  space-x-20 mx-auto">


        <div class="container  flex flex-row items-center   mb-52 w-1/3 py-5 ">
            <p class="text-2xl space-y-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi assumenda
                earum excepturi facere facilis illo maiores nulla ullam. A asperiores consectetur corporis deserunt
                dolorem enim, expedita facere fugiat hic labore maxime nemo nesciunt nobis obcaecati, omnis provident,
                rerum saepe sapiente sed ullam unde veniam vero voluptatum! Assumenda atque debitis fugit nihil quia
                veniam. Ad doloribus eaque illo itaque laborum laudantium modi nisi rerum. Ab ad adipisci architecto
                atque consequatur deleniti dicta dolorem ea et facere laboriosam magni molestiae mollitia natus nisi
                optio pariatur perferendis quae quibusdam quis quo quos recusandae reiciendis reprehenderit saepe
                sapiente sed, similique sit tenetur, totam velit!</p>
        </div>


        <div>
            <img src="images/Rectangle300.png" alt="">
        </div>
    </div>


    <div class="container mx-auto">
        <h3 class="font-bold text-2xl">Галерија со Активности:</h3>
    </div>

    {{--    Carousel section --}}
    <div class="container flex justify-center items-center mx-auto mt-5 mb-[5rem]">
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative flex  h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/image26.png"
                         class="absolute block w-full rounded-xl -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                         alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/images/image26.png"
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
