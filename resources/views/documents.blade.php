@extends('layouts.app')
@section('title', 'Donations Page')
@section('content')

    <div class="container pt-4 mx-auto font-heading">
        <div class="container">

            <nav class="relative flex justify-center w-11/12 mx-10 space-x-4 border-b border-lightGray text-m pt-11">
                <a href="#" class="relative px-4 py-2 text-black nav-item hover:text-black"
                   data-header="Годишни извештаи">Годишни извештаи</a>
                <a href="#" class="relative px-4 py-2 text-black nav-item hover:text-black"
                   data-header="Финансиски извештаи">Финансиски извештаи</a>
                <a href="#" class="relative px-4 py-2 text-black nav-item hover:text-black"
                   data-header="Политички документи">Политички документи</a>
                <div
                    class="absolute bottom-0 left-0 h-1 underline transition-all duration-300 ease-in-out bg-orange-500 rounded-full"></div>
            </nav>
        </div>


        <div class="bg-gray-100 py-8 px-6">
            <!-- 2023 Section -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">2023 година</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Repeat Card 2, 3, 4 for more cards... -->
                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>

                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>

                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- View All Button -->
                <div class="flex justify-end mt-6">
                    <x-purple-btn class="px-6 py-3 bg-purple-200 text-purple-700 font-semibold">
                        Види ги сите
                    </x-purple-btn>
                </div>
            </div>

            <!-- 2022 Section (repeat the same structure for other years) -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">2022 година</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Cards for 2022 section here... -->
                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>
                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>
                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>
                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- View All Button for 2022 -->
                <div class="flex justify-end mt-6">
                    <x-purple-btn class="px-6 py-3 bg-purple-200 text-purple-700 font-semibold">
                        Види ги сите
                    </x-purple-btn>
                </div>
            </div>

            <!-- 2021 Section (repeat as needed) -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold mb-6">2021 година</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Cards for 2021 section here... -->
                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>
                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>
                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>
                    <div class="relative p-6 bg-white rounded-xl shadow-md h-52 flex flex-col justify-between">
                        <p class="text-md font-semibold">Lorem ipsum dolor sit amet</p>
                        <button class="absolute bottom-4 right-4 bg-black p-2 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 4v12m8-8l-8 8-8-8"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- View All Button for 2021 -->
                <div class="flex justify-end mt-6">
                    <x-purple-btn class="px-6 py-3 bg-purple-200 text-purple-700 font-semibold">
                        Види ги сите
                    </x-purple-btn>
                </div>
            </div>
        </div>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const navItems = document.querySelectorAll(".nav-item");
                const underline = document.querySelector(".underline");
                const headerTitle = document.getElementById("header-title");
                let activeItem = navItems[0];

                function moveUnderline(item) {
                    const itemRect = item.getBoundingClientRect();
                    const containerRect = item.parentElement.getBoundingClientRect();
                    let offsetLeft = itemRect.left - containerRect.left;
                    let itemWidth = itemRect.width;

                    underline.style.transform = `translateX(${offsetLeft - 30}px)`;
                    underline.style.width = `${itemWidth + 30}px`;
                }

                navItems.forEach((item) => {
                    item.addEventListener("click", () => {
                        headerTitle.textContent = item.getAttribute("data-header");
                        navItems.forEach(i => i.classList.remove('active'));
                        item.classList.add('active');
                        activeItem = item;
                        moveUnderline(item);
                    });

                    item.addEventListener("mouseenter", () => {
                        moveUnderline(item);
                    });

                    item.addEventListener("mouseleave", () => {
                        moveUnderline(activeItem);
                    });
                });


                moveUnderline(activeItem);
            });
        </script>

@endsection
