@extends('layouts.app')

@section('title', 'Product showcase' )

@section('content')
    <div class="max-w-5xl mx-auto mb-[10rem]">

        <div class="flex gap-4 mt-[5rem]">
            <div class="w-2/3">
                <img src="{{$product->image_one}}" alt="" class="rounded-2xl">
            </div>
            <div class="w-1/3 flex flex-col gap-4">
                <img src="{{$product->image_two}}" alt="" class="w-full h-[213px] rounded-2xl object-cover">
                <img src="{{$product->image_three}}" alt="" class="w-full h-[213px] rounded-2xl object-cover">
                <img src="{{$product->image_four}}" alt="" class="w-full h-[213px] rounded-2xl object-cover">
            </div>
        </div>

        <div class=" mt-8">
            <div class="flex justify-between items-center mb-3">
                <h2 class="text-3xl block font-semibold">{{$product->name}}</h2>
                <h2 class="text-3xl block font-semibold">{{$product->price}} MKD</h2>

            </div>

            <div class="flex justify-between items-end">
                <p class="w-2/3 leading-relaxed font-light">{{$product->description}}</p>
                <div class="flex justify-between items-center gap-5">
                    <button class="favoriteIcon">
                        <svg width="50" height="50" viewBox="0 0 60 60" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 30C1.5 14.2599 14.2599 1.5 30 1.5C45.7401 1.5 58.5 14.2599 58.5 30C58.5 45.7401 45.7401 58.5 30 58.5C14.2599 58.5 1.5 45.7401 1.5 30Z"
                                  fill="#FBF8F4" stroke="#191919" stroke-width="3"/>
                            <path d="M39.2076 15.2656C35.4049 15.2656 32.0754 16.8266 30 19.465C27.9246 16.8266 24.5951 15.2656 20.7924 15.2656C17.7654 15.2689 14.8633 16.4182 12.7229 18.4613C10.5824 20.5044 9.37841 23.2746 9.375 26.1641C9.375 38.4687 28.4881 48.4285 29.3021 48.8398C29.5166 48.95 29.7564 49.0077 30 49.0077C30.2436 49.0077 30.4834 48.95 30.6979 48.8398C31.5119 48.4285 50.625 38.4687 50.625 26.1641C50.6216 23.2746 49.4176 20.5044 47.2771 18.4613C45.1367 16.4182 42.2346 15.2689 39.2076 15.2656ZM30 45.9922C26.6374 44.1219 12.3214 35.6018 12.3214 26.1641C12.3244 24.0204 13.2178 21.9653 14.8058 20.4495C16.3937 18.9337 18.5467 18.0809 20.7924 18.0781C24.3742 18.0781 27.3814 19.8992 28.6373 22.8242C28.7483 23.0821 28.9371 23.3027 29.1797 23.458C29.4224 23.6132 29.7079 23.6961 30 23.6961C30.2921 23.6961 30.5776 23.6132 30.8203 23.458C31.0629 23.3027 31.2517 23.0821 31.3627 22.8242C32.6186 19.8939 35.6258 18.0781 39.2076 18.0781C41.4533 18.0809 43.6063 18.9337 45.1942 20.4495C46.7822 21.9653 47.6756 24.0204 47.6786 26.1641C47.6786 35.5877 33.3589 44.1201 30 45.9922Z"
                                  fill="#191919"/>
                        </svg>
                    </button>
                    <a href="#">
                        <x-red-btn class="px-[5rem]">Купи</x-red-btn>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
