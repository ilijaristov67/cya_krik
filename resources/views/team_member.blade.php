@extends('layouts.app')

@section('title', 'Team Member Page')

@section('content')
<div class="container mx-auto md:py-20 md:px-40 overflow-hidden">
    <!-- Team Member Details Section -->
    <div class="flex flex-col md:flex-row items-center p-8">
        <!-- Team Member Image on the Left -->
        <div class="w-full md:w-1/3 flex justify-center mb-8 md:mb-0">
            <img src="{{ asset('images/member1.jpg') }}" alt="Игор Димовски"
                class="rounded-3xl shadow-lg w-2/3 md:w-full">
        </div>

        <!-- Team Member Info on the Right -->
        <div class="w-full md:w-2/3 px-5">
            <h1 class="text-black font-heading text-3xl mb-4 font-bold">Игор Димовски</h1>
            <p class="text-black text-base leading-relaxed mb-6">
                Lorem ipsum dolor sit amet consectetur. Et mauris sed sollicitudin et eu. Congue dictum nibh non
                sedstasis sit. Id lacus ac purus cursus sit. Eulacinia sed felis morbi risus ullamcorper. Dictum
                wenenatis sem per scelerisque purus nunc hac luctus vitae ut.
            </p>
        </div>
    </div>
</div>
@endsection