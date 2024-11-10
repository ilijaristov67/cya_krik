@extends('layouts.app');

@section('content')

    <div class="container mx-auto mt-10">
        <h1 class="text-5xl font-bold uppercase">топ новости</h1>
    </div>

    <div class="container mx-auto mt-10">
        <div class="container flex justify-start items-start gap-6">
            <div class="flex flex-col items-start">
                <img src="/images/news.png" alt="">
                <p class="border-3 px-10 border-black rounded-xl mt-4 font-bold">03.08.2023</p>
            </div>
            <div class="flex flex-col items-start">
                <img src="/images/image24.png" alt="">
                <p class="border-3 px-10 border-black rounded-xl mt-4 font-bold">03.08.2023</p>
            </div>
            <div class="flex flex-col items-start">
                <img src="/images/Rectangle301.png" alt="">
                <p class="border-3 px-10 border-black rounded-xl mt-4 font-bold">03.08.2023</p>
            </div>
        </div>
    </div>




    <div class="container mx-auto mt-10 mb-10">
        <div class="container flex justify-start items-start gap-6">
            <div class="flex flex-col items-start w-2/3 gap-8">
                <h3 class="font-bold text-5xl">Lorem ipsum dolor sit amet, consectetur </h3>
                <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda error eveniet harum
                    nisi quibusdam saepe?</p>
                <x-black-btn><a href="{{route('singleNewsLetterPage')}}" class="px-10">CTA</a></x-black-btn>
            </div>
            <div class="flex flex-col items-start w-1/3 gap-6">
                <h3 class="font-bold text-2xl py-2">Lorem ipsum dolor sit amet, consectetur </h3>
                <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda error eveniet harum
                    nisi quibusdam saepe?</p>
                <x-black-btn><a href="{{route('singleNewsLetterPage')}}" class="px-10 py-2">CTA</a></x-black-btn>
            </div>
            <div class="flex flex-col items-start w-1/3 gap-6">
                <h3 class="font-bold text-2xl py-2">Lorem ipsum dolor sit amet, consectetur </h3>
                <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda error eveniet harum
                    nisi quibusdam saepe?</p>
                <x-black-btn><a href="{{route('singleNewsLetterPage')}}" class="px-10 py-2">CTA</a></x-black-btn>
            </div>
        </div>
    </div>

    <hr class="h-1 bg-black">


    <div class="container mx-auto mt-10">
        <h1 class="text-5xl font-bold uppercase">останати новости</h1>
    </div>

    <div class="container mx-auto mt-20 mb-10">
        <div class="container flex justify-start items-start gap-6">
            <div class="flex flex-col items-start w-1/3 gap-8">
                <p class="border-3 px-10 border-black rounded-xl mt-4 font-bold">03.08.2023</p>
                <h3 class="font-bold ">Lorem ipsum dolor sit amet, consectetur </h3>
                <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda error eveniet harum
                    nisi quibusdam saepe?</p>
                <x-black-btn><a href="{{route('singleNewsLetterPage')}}" class="px-10">CTA</a></x-black-btn>
            </div>
            <div class="flex flex-col items-start w-1/3 gap-6">
                <p class="border-3 px-10 border-black rounded-xl mt-4 font-bold">03.08.2023</p>
                <h3 class="font-bold text-2xl py-2">Lorem ipsum dolor sit amet, consectetur </h3>
                <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda error eveniet harum
                    nisi quibusdam saepe?</p>
                <x-black-btn><a href="{{route('singleNewsLetterPage')}}" class="px-10 py-2">CTA</a></x-black-btn>
            </div>
            <div class="flex flex-col items-start w-1/3 gap-6">
                <p class="border-3 px-10 border-black rounded-xl mt-4 font-bold">03.08.2023</p>
                <h3 class="font-bold text-2xl py-2">Lorem ipsum dolor sit amet, consectetur </h3>
                <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda error eveniet harum
                    nisi quibusdam saepe?</p>
                <x-black-btn><a href="{{route('singleNewsLetterPage')}}" class="px-10 py-2">CTA</a></x-black-btn>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-10 mb-10">
        <div class="container flex mx-auto justify-center items-center gap-6">
            <div class="flex flex-col items-start w-1/3 gap-8">
                <p class="border-3 px-10 border-black rounded-xl mt-4 font-bold">03.08.2023</p>
                <h3 class="font-bold ">Lorem ipsum dolor sit amet, consectetur </h3>
                <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda error eveniet harum
                    nisi quibusdam saepe?</p>
                <x-black-btn><a href="#" class="px-10">CTA</a></x-black-btn>
            </div>
            <div class="flex flex-col items-start w-1/3 gap-6">
                <p class="border-3 px-10 border-black rounded-xl mt-4 font-bold">03.08.2023</p>
                <h3 class="font-bold text-2xl py-2">Lorem ipsum dolor sit amet, consectetur </h3>
                <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda error eveniet harum
                    nisi quibusdam saepe?</p>
                <x-black-btn><a href="#" class="px-10 py-2">CTA</a></x-black-btn>
            </div>
            <div class="flex flex-col items-start w-1/3 gap-6">
                <p class="border-3 px-10 border-black rounded-xl mt-4 font-bold">03.08.2023</p>
                <h3 class="font-bold text-2xl py-2">Lorem ipsum dolor sit amet, consectetur </h3>
                <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda error eveniet harum
                    nisi quibusdam saepe?</p>
                <x-black-btn><a href="#" class="px-10 py-2">CTA</a></x-black-btn>
            </div>
        </div>
    </div>

    <hr class="h-1 bg-black ">






        <ul class="container py-32 flex items-center -space-x-px h-8 text-sm mx-auto">
            <li>
                <a href="#"
                   class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500     hover:text-gray-700   dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center justify-center px-1 h-8 font-bold   ">1</a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center justify-center px-1 h-8 font-bold">2</a>
            </li>
            <li>
                <a href="#" aria-current="page"
                   class="z-10 flex items-center justify-center px-1 h-8 font-bold">3</a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center justify-center px-1 h-8 font-bold">4</a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center justify-center px-1 h-8 font-bold">5</a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center justify-center px-1 h-8 font-bold">6</a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center justify-center px-1 h-8 font-bold">...</a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center justify-center px-1 h-8 font-bold">9</a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center justify-center px-1 h-8 font-bold">10</a>
            </li>


        </ul>

@endsection
