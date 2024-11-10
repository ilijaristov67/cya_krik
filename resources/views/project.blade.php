@extends('layouts.app')
@section('title', 'Services Page')
@section('content')



<div class="container mx-auto my-20 text-center font-heading">
    <h1 class="text-4xl font-bold">Проекти</h1>
</div>


<div class="mx-auto my-20 max-w-7xl">
    <h2 class="pt-20 text-3xl font-semibold tracking-wide text-gray-800">Тековни</h2>
    <div class="grid grid-cols-4 gap-4 mt-6">

        <div class="relative col-span-2 row-span-2 overflow-hidden rounded">
            <a href="{{route('singleProject')}}">
            <img src="{{ asset('images/Rectangle 11.png') }}" class="w-full h-auto">
            <div class="absolute top-0 left-0 flex items-center justify-center w-full text-lg text-2xl font-bold text-white bg-black h-1/4 rounded-t-2xl">
                Project name
            </div>
            </a>
        </div>

        <div class="relative col-span-2 overflow-hidden rounded">
            <img src="{{ asset('images/centar krikni 2 3.png') }}" class="w-full h-auto">
            <div class="absolute top-0 left-0 flex items-center justify-center w-full text-lg font-bold text-white bg-black h-1/4 rounded-t-2xl">
               Project name
            </div>
        </div>
        <div class="relative overflow-hidden rounded">
            <img src="{{ asset('images/Rectangle 21.png') }}" class="w-full h-auto">
            <div class="absolute top-0 left-0 flex items-center justify-center w-full text-lg font-bold text-white bg-black h-1/4 rounded-t-2xl">
                Project name
            </div>
        </div>
        <div class="relative overflow-hidden rounded">
            <img src="{{ asset('images/Rectangle 22.png') }}" class="w-full h-auto">
            <div class="absolute top-0 left-0 flex items-center justify-center w-full text-lg font-bold text-white bg-black h-1/4 rounded-t-2xl">
                Project name
            </div>
        </div>
    </div>
    <div class="w-full mt-16 font-mono border-t border-gray-200">
        <nav class="flex flex-wrap justify-start -mt-px text-gray-700 pagination">
            <span class="p-2 mx-1 text-gray-800 border-t border-black current">1</span>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">2</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">3</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">4</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">5</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">6</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">...</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">9</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">10</a>


        </nav>
    </div>
</div>





<div class="mx-auto my-20 max-w-7xl">
    <h2 class="text-3xl font-semibold tracking-wide text-gray-800">Завршени</h2>

    <div class="grid grid-cols-4 gap-4 mt-6">
        <div class="relative col-span-2 row-span-2 overflow-hidden rounded">
            <a href="{{route('singleProject')}}">
            <img src="{{ asset('images/Rectangle 11.png') }}" class="w-full h-auto">
            <div class="absolute top-0 left-0 flex items-center justify-center w-full text-lg text-2xl font-bold text-white bg-black h-1/4 rounded-t-2xl">
                Project name
            </div>
            </a>
        </div>
        <div class="relative col-span-2 overflow-hidden rounded">
            <img src="{{ asset('images/centar krikni 2 3.png') }}" class="w-full h-auto">
            <div class="absolute top-0 left-0 flex items-center justify-center w-full text-lg font-bold text-white bg-black h-1/4 rounded-t-2xl">
               Project name
            </div>
        </div>
        <div class="relative overflow-hidden rounded">
            <img src="{{ asset('images/Rectangle 21.png') }}" class="w-full h-auto">
            <div class="absolute top-0 left-0 flex items-center justify-center w-full text-lg font-bold text-white bg-black h-1/4 rounded-t-2xl">
                Project name
            </div>
        </div>
        <div class="relative overflow-hidden rounded">
            <img src="{{ asset('images/Rectangle 22.png') }}" class="w-full h-auto">
            <div class="absolute top-0 left-0 flex items-center justify-center w-full text-lg font-bold text-white bg-black h-1/4 rounded-t-2xl">
                Project name
            </div>
        </div>
    </div>


    <div class="w-full mt-16 font-mono border-t border-gray-200">
        <nav class="flex flex-wrap justify-start -mt-px text-gray-700 pagination">
            <span class="p-2 mx-1 text-gray-800 border-t border-black current">1</span>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">2</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">3</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">4</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">5</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">6</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">...</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">9</a>
            <a class="p-2 mx-1 border-t border-transparent hover:border-gray-700" href="#">10</a>
        </nav>
    </div>
    </div>







@endsection
