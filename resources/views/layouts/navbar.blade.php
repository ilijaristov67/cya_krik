<div class="pt-8 lg:pt-16 md:pt-16 sm:pt-10 m-auto pb-1 bg-orange w-full fixed z-40">
    <div class="relative flex items-center justify-between w-3/4 m-auto">
        <a href="/">
            <img id="logoImg" class="h-16 w-16" src="{{ asset('images/Крик-лого.png') }}" alt="Main Logo">
        </a>

        <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black-500 rounded-lg md:hidden hover:bg-black-100 focus:outline-none   absolute right-0 top-0 mt-3 mr-3"
                aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path class="path" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="text-black flex flex-col p-4 md:p-0 md:flex-row md:space-x-4 rtl:space-x-reverse md:mt-0 items-center">
                <img id="logoImg2" class="h-16 w-16 hidden" src="{{ asset('images/Крик-лого.png') }}"
                     alt="Secondary Logo">
                <li class="relative font-medium text-lg flex items-center">
                    <div class="dropdown-container inline-block">
                        <div class="dropdown-container">
                            <button id="dropdownBtn"
                                    class="font-semibold bg-orange text-black text-2xl px-3 cursor-pointer flex items-center justify-center">
                                За нас
                                <i id="arrowIlija" class="arrowIlija down ml-2 mb-2 text-white"></i>
                            </button>

                            <ul id="customDropdown" class="hidden absolute bg-black text-white text-center">
                                <li class="px-3 cursor-pointer"><a href="{{route('about')}}">За Крик</a></li>
                                <li class="px-3 cursor-pointer"><a href="{{route('team')}}">Нашиот тим</a></li>
                                <li class="px-3 cursor-pointer"><a href="{{route('volunteers.showAll')}}">Волонтери</a></li>
                                <li class="px-3 cursor-pointer"><a href="{{route('documents')}}">Архива</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="li-elements-css mt-1">
                    <a href="{{route('services')}}"
                       class="li-elements font-semibold text-2xl text-lg py-2 px-3 rounded-full">Услуги</a>
                </li>
                <li class="li-elements-css mt-2">
                    <a href="{{route('project')}}" class="li-elements font-semibold text-2xl text-lg py-2 px-3 rounded-full">Проекти</a>
                </li>
                <li class="li-elements-css mt-2">
                    <a href="#contactUs" class="li-elements font-semibold text-2xl text-lg py-2 px-3 rounded-full">Контакт</a>
                </li>
                <li class="mt-2">
                    <a id="donate" href="{{route('donations')}}"
                       class=" py-2 font-semibold px-3 text-white bg-black rounded-t-full rounded-full text-xl hover:bg-purple">
                        Донирај
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
