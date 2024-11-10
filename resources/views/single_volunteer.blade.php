@extends('layouts.app')
@section('title', 'Volunteer')
@section('content')
<div class="w-3/4 m-auto mt-24 p-10">
    <a href="#" class="rounded-3xl flex flex-col items-center justify-center bg-white border border-black shadow md:flex-row w-full hover:bg-gray-100 mx-auto">
        <img class="rounded-3xl object-cover w-full md:w-1/3 h-[350px]" src="{{ $volunteer->image }}" alt="volunteer_picture">
        <div class="flex flex-col justify-center items-start p-20 leading-normal w-full md:w-2/3">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $volunteer->name }} {{ $volunteer->lastname }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $volunteer->biography }}</p>
        </div>
    </a>

    <div class="w-full m-auto mt-24">
        <div class="flex justify-between mb-8">
            <h2 class="text-3xl font-bold">Проекти во кои учествува</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($volunteer->projects as $project)
            <div class="flex flex-col ">
                <!-- Label: Tekoven or Zavrsen -->
                @if ($project->is_finished === 1)
                <h5 class="w-[150px] border-black text-black font-bold border-3 text-lg rounded-3xl text-center mb-4">Завршен</h5>
                @else
                <h5 class="w-[150px] border-black text-black font-bold border-3 text-lg rounded-3xl text-center mb-4">Тековен</h5>
                @endif

                <!-- Project Block -->
                <div class="relative w-full bg-white border border-gray-200 rounded-2xl shadow transform transition ease-in-out duration-300 hover:scale-105 block cursor-pointer justify-between">
                    <div class="h-64 bg-cover bg-center rounded-2xl" style="background-image: url('{{ $project->image }}');">
                        <div class="bg-black bg-opacity-40 h-full rounded-lg flex flex-col justify-end p-4">
                            <a href="#" class="text-xl font-bold text-white">{{ $project->name }}</a>
                            <div class="mt-2 mb-3 text-white">
                                <span class="text-sm">{{ $project->start_date }} - {{ $project->end_date }}</span>
                            </div>
                            <a href="#" class="text-blue-300 hover:underline">Види Повеќе →</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection