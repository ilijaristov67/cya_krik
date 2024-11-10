@extends('layouts.app')


@section('title', 'Home Page')

@section('content')

{{-- font needs to be fixed --}}
{{-- responsive version needs to be fixed --}}
{{-- slider--}}

{{-- Hero Section  --}}

<header
    {{--        needs to be fixed: title and the colors of the button--}}
    class="bg-cover  min-h-screen   flex justify-center py-40 bg-[url('/public/images/Homepage/herosection_1920x1120px.jpg')] relative  ">
    <div class="container flex-col justify-center w-80 text-center">
        <h1 class="text-5xl  md:text-4xl lg:text-5xl font-bold text-center uppercase">промената доаѓа од
            младите </h1>
        <h2 class=" text-2xl  md:text-3l lg:text-3l font-bold text-center py-10 capitalize">кој сме ние? </h2>
        <p class="text-center  ">Центарот за младинкси активизам Крик е невладина , непрофитна организација основана
            од млади луѓе, предводена од млади луѓе и работи за и со млади луѓе.</p>
        {{-- this button should redirect to about us page --}}
        <x-purple-btn class="mt-5"><a href="">Повеќе за нас</a></x-purple-btn>
    </div>


    {{-- Naskoro section --}}

    <section class="flex flex-row absolute left-1/2 transform -translate-x-1/2 bottom-[-350px]">
        <div class="container w-5xl bg-black p-10 rounded-l-3xl ">
            <h3 class="text-orange mt-5 uppercase">Наскоро</h3>
            <h4 class="text-whiteBackground mt-5">Нижеме заедно</h4>
            <p class="text-lightGray mt-5">
                Проектот ""Еднакви можности за девојчињата и младите жени во Северна Македонија" го спроведуваат
                Националниот младински совет на Македонија и Stella Network, со финансиска поддршка од страна на
                Британската амбасада во Скопје.
            </p>
            <div class="flex space-x-8">
                {{-- redirect to more info about the event page--}}
                <a href="">
                    <x-orange-btn class="mt-5 font-bold"><a href="">Види Повеќе</a></x-orange-btn>
                </a>
                {{-- redirect to volunteers application form --}}
                <a href="">
                    <x-purple-btn class="mt-5"><a href="">Пријави се</a></x-purple-btn>
                </a>
            </div>
        </div>
        <div
            class="container  flex justify-end rounded-r-3xl   bg-cover bg-center bg-no-repeat bg-[url('/public/images/Homepage/homepage_nastan_750x655px.jpg')]">
            <div class="container bg-black w-20 h-20 rounded-xl p-3 flex flex-col ">
                <p class="text-lightGray text-center font-bold mb-0">23</p>
                <p class="text-lightGray text-center font-bold">Септ</p>
            </div>
        </div>
    </section>
</header>

<div class="h-[400px]"></div>

{{-- Numbers section --}}

<hr class=" h-1 bg-black ">

<section class=" flex justify-center content-center p-10 text-center">

    <div class="container content-center flex-wrap">
        <p class=" text-red font-extrabold text-5xl">320+</p>
        <p class="text-red capitalize">проекти</p>
    </div>
    <div class="container  content-center">
        <p class="font-bold text-red text-5xl">580+</p>
        <p class="text-red capitalize">волонтери</p>
    </div>
    <div class="container  content-center">
        <p class="font-bold text-red text-5xl">25+</p>
        <p class="text-red capitalize">партнери</p>
    </div>
</section>
<hr class=" h-1 bg-black">

<!-- Volunteer Section -->
<div class="mx-auto w-4/5 flex flex-col lg:flex-row my-5 space-y-6 lg:space-y-0 lg:space-x-4 mt-10 pt-10">
    <div class="w-full lg:w-4/6">
        <img class="rounded-2xl object-cover w-full h-[300px]" src="{{ asset('images/Group_307.jpg') }}" alt="">
    </div>
    <div class="w-full lg:w-2/6 bg-black rounded-2xl p-6 flex flex-col justify-between">
        <div>
            <h1 class="text-2xl text-white font-bold">Стани</h1>
            <h2 class="text-xl text-white font-bold">Волонтер</h2>
        </div>
        <p class="text-white mt-6">
            Сакаш да работиш со млади лица? Оваа можност е токму за тебе.
        </p>
        <div class="mt-10">
            <a href="#">
                <button type="button" class="hover:text-white border border-gray-800 font-medium rounded-2xl text-sm px-[40px] py-[10px] text-center dark:border-white dark:text-white">
                    Придружи ни Се
                </button>
            </a>
        </div>
    </div>
</div>

{{-- news with slider --}}

<div class="container mx-auto py-5 mb-0">
    <h1 class="font-bold text-5xl ">Најнови Вести</h1>
</div>

{{-- needs to be fixed: date  yellow text in the image part--}}


{{-- Image card section --}}

<section class="flex justify-center gap-6 py-20 ">
    <div
        class="max-w-sm   rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 bg-[url('/public/images/Homepage/homepage_card_2.jpg')] bg-cover bg-center">
        {{-- by clicking on card user should be redirected to the project page--}}
        <a href="#">
        </a>
        <div class="p-6 shadow-black flex-col flex justify-end content-end mt-52 ">
            <p class="mb-3  uppercase bg-orange text-black  rounded-full font-bold text-center w-30">активност
                eco-action </p>
            <p class="mb-3   text-lightGray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                itaque.</p>
            <a href="#" class="inline-flex items-center text-lightGray capitalize">
                види повеќе
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>

    </div>

    <div
        class="max-w-sm  rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 bg-[url('/public/images/Homepage/homepage_card_2.jpg')] bg-cover bg-center">
        {{-- by clicking on card user should be redirected to the project page--}}
        <a href="#">
        </a>
        <div class="p-6 shadow-lg flex-col flex justify-end content-end mt-52 ">
            <p class="mb-3  uppercase bg-orange text-black  rounded-full font-bold text-center w-30">активност
                eco-action </p>
            <p class="mb-3   text-lightGray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                itaque.</p>
            <a href="#" class="inline-flex items-center text-lightGray capitalize">
                види повеќе
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>

    </div>
    <div
        class="max-w-sm   rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 bg-[url('/public/images/Homepage/homepage_card_3.jpg')] bg-cover bg-center">

        {{-- by clicking on card user should be redirected to the project page--}}
        <a href="#">
        </a>
        <div class="p-6 shadow-2xl flex-col flex justify-end content-end mt-52 ">
            <p class="mb-3  uppercase bg-orange text-black  rounded-full font-bold text-center w-30">активност
                eco-action </p>
            <p class="mb-3   text-lightGray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                itaque.</p>
            <a href="#" class="inline-flex items-center text-lightGray capitalize">
                види повеќе
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>


    <div
        class="max-w-sm   rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 bg-[url('/public/images/Homepage/homepage_card_4.jpg')] bg-cover bg-center">
        {{-- by clicking on card user should be redirected to the project page--}}
        <a href="#">
        </a>
        <div class="p-6 shadow-lg flex-col flex justify-end content-end mt-52 ">
            <p class="mb-3  uppercase bg-orange text-black  rounded-full font-bold text-center w-30">активност
                eco-action </p>
            <p class="mb-3   text-lightGray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                itaque.</p>
            <a href="#" class="inline-flex items-center text-lightGray capitalize">
                види повеќе
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>

    <div
        class="max-w-sm   rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 bg-[url('/public/images/Homepage/homepage_card_2.jpg')] bg-cover bg-center">
        {{-- by clicking on card user should be redirected to the project page--}}
        <a href="#">
        </a>
        <div class="p-6 shadow-lg flex-col flex justify-end content-end mt-52 ">
            <p class="mb-3  uppercase bg-orange text-black  rounded-full font-bold text-center w-30">активност
                eco-action </p>
            <p class="mb-3   text-lightGray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                itaque.</p>
            <a href="#" class="inline-flex items-center text-lightGray capitalize">
                види повеќе
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>

    </div>

</section>

{{-- missing slider for the images :( --}}



<div class=" containter flex flex-row justify-end">
    <div class="flex mb-10">

        {{-- this will navigate the user to the Newsletter page with all the news of that month.--}}
        <x-purple-btn><a href="">Види за цел Месец</a></x-purple-btn>
    </div>
</div>

{{-- Services section --}}

<div class="container mx-auto py-5 mb-0">
    <h1 class="font-bold text-5xl ">Нашите услуги</h1>
</div>

{{-- missing box shadow on in the content of the card --}}

<section class="flex flex-col lg:flex-row justify-center items-center w-4/5 mx-auto space-y-8 lg:space-y-0 lg:space-x-8">
    <!-- Left Image Section -->
    <div
        class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2 h-48 sm:h-64 md:h-72 lg:h-96 rounded-3xl bg-cover bg-center bg-no-repeat bg-[url('/public/images/Homepage/homepage_uslugi_cardimg.jpg')]">
    </div>

    <!-- Right Text Section -->
    <div class="w-full lg:w-1/2 space-y-12 flex flex-col justify-between">
        <!-- First Service -->
        <div class="relative">
            <h3 class="font-bold text-xl lg:text-2xl">01 Мултифункционален Центар за Крикни</h3>
            <p class="text-gray-700 mt-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque maiores quam quod rem ut. Eaque itaque labore maxime molestias nemo.</p>
            <a href="#" class="absolute top-0 right-0 mt-2">
                <i class="fa-solid fa-square-arrow-up-right text-3xl arrows-homepage-ilija"></i>
            </a>
            <hr class="border-t-2 border-black mt-5">
        </div>

        <!-- Second Service -->
        <div class="relative">
            <h3 class="font-bold text-xl lg:text-2xl">02 Независни Станбени Единици</h3>
            <p class="text-gray-700 mt-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet fugit ipsam ipsum magnam maxime, voluptate. Consequatur deserunt minus nesciunt!</p>
            <a href="#" class="absolute top-0 right-0 mt-2">
                <i class="fa-solid fa-square-arrow-up-right text-3xl arrows-homepage-ilija"></i>
            </a>
            <hr class="border-t-2 border-black mt-5">
        </div>

        <!-- Third Service -->
        <div class="relative">
            <h3 class="font-bold text-xl lg:text-2xl">03 Советувалиште за Млади и Родители</h3>
            <p class="text-gray-700 mt-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequatur debitis modi, molestias nihil nobis odit reprehenderit sunt vel voluptatem?</p>
            <a href="#" class="absolute top-0 right-0 mt-2">
                <i class="fa-solid fa-square-arrow-up-right text-3xl arrows-homepage-ilija"></i>
            </a>
            <hr class="border-t-2 border-black mt-5">
        </div>
    </div>
</section>



{{-- Partners section --}}

<div class="container mx-auto py-5 mt-5 mb-0">
    <h1 class="font-bold text-5xl ">Партнери</h1>
</div>

<hr class=" h-1 bg-black mt-10 ">
<section class="flex justify-center items-center px-50 flex-wrap px-5 p-10 text-center">
    <div class="  w-1/4 flex justify-center">
        <img src="/images/Frame91.jpg" alt="partner">
    </div>
    <div class="w-1/4 flex justify-center">
        <img src="/images/Frame92.jpg" alt="partner">
    </div>
    <div class="w-1/4 flex justify-center">
        <img src="/images/nmsmakedonija1.jpg" alt="partner">
    </div>
    <div class="w-1/4 flex justify-center">
        <img src="/images/stella-network2.jpg" alt="partner">
    </div>
</section>

<hr class=" h-1 bg-black mb-32 ">

@endsection