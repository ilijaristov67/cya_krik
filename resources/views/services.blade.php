@extends('layouts.app')
@section('title', 'Services Page')
@section('content')

    <div class="container pt-4 mx-auto font-heading">
        <div class="container">
            <nav class="relative flex justify-center max-w-3xl mx-auto space-x-8 border-b border-lightGray text-m pt-11">
                <a href="#" class="relative px-4 py-4 text-black nav-item hover:text-black" data-header="Центар Крикни">Центар Крикни</a>
                <a href="#" class="relative px-4 py-4 text-black nav-item hover:text-black" data-header="Независни Станбени Единици">Независни Станбени Единици</a>
                <a href="#" class="relative px-4 py-4 text-black nav-item hover:text-black" data-header="Советујалите">Советујалите</a>
                <div class="absolute bottom-0 left-0 h-1 underline transition-all duration-300 ease-in-out bg-orange-500 rounded-full"></div>
            </nav>

    </div>
        <div class="mx-auto mt-20 max-w-7xl">
            <h1 id="header-title" class="text-4xl font-bold text-gray-800">Центар Крикни</h1>
            <p class="mt-10 font-sans text-gray-600 text-m">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio officiis quae vel explicabo laudantium dicta beatae perferendis nostrum, cumque quo perspiciatis voluptas, reiciendis culpa unde ad eveniet soluta sint. Modi ducimus eligendi illo illum harum maxime? Velit corrupti aliquid perferendis enim, quis repudiandae ducimus sequi, magni facilis, unde eaque provident dignissimos dolorum. Repudiandae eaque, quisquam corporis perspiciatis corrupti eum impedit.
            </p>
        </div>

        <div class="mx-auto my-20 max-w-7xl">
            <h2 class="text-xl font-semibold tracking-wide text-gray-800">Галерија Со Активности</h2>
            <div class="grid grid-cols-3 gap-4 mt-6">
                <div class="overflow-hidden rounded">
                    <img src="{{ asset('images/Rectangle 11.png') }}" class="w-full h-auto">
                </div>
                <div class="col-span-2 overflow-hidden rounded grayscale">
                    <img src="{{ asset('images/centar krikni 2 3.png') }}" class="w-full h-auto">
                </div>
                <div class="overflow-hidden rounded grayscale">
                    <img src="{{ asset('images/Rectangle 21.png') }}" class="w-full h-auto">
                </div>
                <div class="overflow-hidden rounded">
                    <img src="{{ asset('images/Rectangle 22.png') }}" class="w-full h-auto">
                </div>
                <div class="overflow-hidden rounded">
                    <img src="{{ asset('images/Rectangle 23.png') }}" class="w-full h-auto">
                </div>
            </div>
        </div>
    </div>

    <script>


document.addEventListener("DOMContentLoaded", function () {
    const navItems = document.querySelectorAll(".nav-item");
    const underline = document.querySelector(".underline");
    const headerTitle = document.getElementById("header-title"); // Ensure this is the correct ID
    let activeItem = navItems[0];

    function moveUnderline(item) {
        const itemRect = item.getBoundingClientRect();
        const containerRect = item.parentElement.getBoundingClientRect();
        const offsetLeft = itemRect.left - containerRect.left;
        const itemWidth = itemRect.width;

        underline.style.transform = `translateX(${offsetLeft}px)`;
        underline.style.width = `${itemWidth}px`;
    }

    navItems.forEach((item) => {
        item.addEventListener("click", () => {
            navItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
            activeItem = item;
            headerTitle.textContent = item.getAttribute("data-header");

            moveUnderline(item);
        });

        item.addEventListener("mouseenter", () => {
            moveUnderline(item);
        });

        item.addEventListener("mouseleave", () => {
            moveUnderline(activeItem);
        });
    });

    // Set initial position and header title
    moveUnderline(activeItem);
    headerTitle.textContent = activeItem.getAttribute("data-header"); // Set initial title
});

     </script>

@endsection
