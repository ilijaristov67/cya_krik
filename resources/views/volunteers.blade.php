@extends('layouts.app')
@section('title', 'Volunteers Page')
@section('content')

<h1 class="text-5xl font-semibold text-center py-10 mt-10">Нашите Волонтери!</h1>
<div class="m-auto w-3/4">
    <nav class="relative flex w-full space-x-4 border-b border-lightGray">
        <a href="#" class="text-center w-1/2 relative px-4 py-5 text-black nav-item_ilija hover:text-black text-2xl font-semibold active" data-form="long_term">Долг Рок</a>
        <a href="#" class="text-center w-1/2 relative px-4 py-5 text-black nav-item_ilija hover:text-black text-2xl font-semibold" data-form="short_term">Краток Рок</a>
        <div class="absolute bottom-0 left-0 h-2 underline_ilija transition-all duration-300 ease-in-out bg-orange-500 rounded-full"></div>
    </nav>
</div>

<div class="w-4/5 mx-auto mb-20 mt-24">
    <!-- Long Term Volunteers (visible by default) -->
    <div id="long_term" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-5">
        @foreach ($volunteers as $volunteer)
        @if ($volunteer->is_longterm === 1)
        <a href="{{ route('volunteers.show', ['volunteer' => $volunteer]) }}" class="col-span-1 rounded-3xl  transform transition ease-in-out duration-300 hover:scale-105 block" target="_blank">
            <div class="max-w-sm bg-white border border-gray-200 rounded-3xl shadow-xl mx-auto">
                <img class="rounded-t-3xl" src="{{$volunteer->image }}" alt="" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-medium tracking-tight">{{ $volunteer->name}} {{ $volunteer->lastname }}</h5>
                    <p class="mb-3 font-normal text-gray-700">{{ $volunteer->age }} Години, {{ $volunteer->country }}</p>
                </div>
            </div>
        </a>
        @endif
        @endforeach
    </div>
    <!-- Short Term Volunteers (hidden by default) -->
    <div id="short_term" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-5 hidden">
        @foreach ($volunteers as $volunteer)
        @if ($volunteer->is_longterm === 0)
        <a href="{{ route('volunteers.show', ['volunteer' => $volunteer]) }}" class="col-span-1 rounded-3xl  transform transition ease-in-out duration-300 hover:scale-105 block" target="_blank">
            <div class="max-w-sm bg-white border border-gray-200 rounded-3xl shadow-xl mx-auto">
                <img class="rounded-t-3xl" src="{{$volunteer->image }}" alt="" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-medium tracking-tight">{{ $volunteer->name}} {{ $volunteer->lastname }}</h5>
                    <p class="mb-3 font-normal text-gray-700">{{ $volunteer->age }} Години, {{ $volunteer->country }}</p>
                </div>
            </div>
        </a>
        @endif
        @endforeach
    </div>
</div>

<script>
    // Initial setup for underline positioning
    const underline = document.querySelector('.underline_ilija');
    const firstNavItem = document.querySelector('.nav-item_ilija');
    underline.style.width = firstNavItem.offsetWidth + 'px';
    underline.style.left = firstNavItem.offsetLeft + 'px';
    document.querySelectorAll('.nav-item_ilija').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelectorAll('#long_term, #short_term').forEach(form => {
                form.classList.add('hidden');
            });
            document.querySelectorAll('.nav-item_ilija').forEach(navItem => {
                navItem.classList.remove('active');
            });
            const selectedForm = document.getElementById(this.getAttribute('data-form'));
            selectedForm.classList.remove('hidden');
            this.classList.add('active');
        });
    });
</script>

@endsection