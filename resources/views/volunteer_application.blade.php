@extends('layouts.app')

@section('title', 'Волонтирај Сега!')

@section('content')
<div class="container mx-auto px-4 py-12">
    <h1 class="text-center text-4xl font-bold font-heading mb-8">Волонтирај Сега!</h1>
    <div class="bg-[#FBF8F4] rounded-2xl p-8 shadow-2xl max-w-4xl mx-auto">

        <form class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Column -->
            <div class="space-y-4">
                <!-- Volunteer Name -->
                <div>
                    <label class="block text-black mb-2 text-xl font-bold">Име на Волонтер*</label>
                    <x-text-input placeholder="Example Namington" class="w-full p-3 rounded-full custom-input" />
                </div>

                <!-- Address -->
                <div>
                    <label class="block text-black mb-2 text-xl font-bold">Адреса*</label>
                    <x-text-input placeholder="Example Street 24" class="w-full p-3 custom-input rounded-full" />
                </div>

                <!-- Phone Number -->
                <div>
                    <label class="block text-black mb-2 text-xl font-bold">Телефонски број*</label>
                    <x-text-input placeholder="+38900000000" type="number"
                        class="w-full p-3 custom-input rounded-full" />
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-black mb-2 text-xl font-bold">Email*</label>
                    <x-text-input placeholder="example@email.com" type="email"
                        class="w-full p-3 custom-input rounded-full" />
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-4">
                <!-- Age Buttons -->
                <div class="pb-10">
                    <label class="block text-black mb-2 text-xl font-bold">Возраст*</label>
                    <div class="flex justify-between">
                        <button type="button"
                            class="w-full py-3 custom-input rounded-full mx-1 text-center text-lg blue_hover">
                            Под 18 години
                        </button>
                        <button type="button"
                            class="w-full py-3 custom-input rounded-full mx-1 text-center text-lg blue_hover">
                            Над 18 години
                        </button>
                    </div>
                </div>

                <!-- Volunteering Experience Slider -->
                <div class="pb-2">
                    <label class="block text-black mb-2 text-xl font-bold">Искуство со волонтирање*</label>
                    <input type="range" min="1" max="10" value="5" class="w-full slider" id="experienceSlider"
                        oninput="updateSliderValue(this.value)" />
                    <div class="flex justify-between text-lg text-black pb-3">
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                        <span>4</span>
                        <span>5</span>
                        <span>6</span>
                        <span>7</span>
                        <span>8</span>
                        <span>9</span>
                        <span>10</span>
                    </div>
                </div>

                <!-- Volunteer Interests -->
                <div>
                    <label class="block text-black mb-2 text-xl font-bold pb-2">Волонтерски Интереси*</label>
                    <div class="grid grid-cols-2 gap-4">
                        <button type="button"
                            class="w-full py-3 custom-input rounded-full text-center text-lg blue_hover">
                            Интерес 1
                        </button>
                        <button type="button"
                            class="w-full py-3 custom-input rounded-full text-center text-lg blue_hover"">
                            Интерес 2
                        </button>
                        <button type=" button"
                            class="w-full py-3 custom-input rounded-full text-center text-lg blue_hover"">
                            Интерес 3
                        </button>
                        <button type=" button"
                            class="w-full py-3 custom-input rounded-full text-center text-lg blue_hover"">
                            Интерес 4
                        </button>
                    </div>
                </div>
            </div>

            <!-- Submit Button (Spanning Full Width) -->
            <div class=" col-span-1 md:col-span-2 my-8 flex justify-center">
                            <x-red-btn class="w-3/5 md:w-1/5 text-center">Пријави Се</x-orange-btn>
                    </div>
        </form>
    </div>
</div>

<!-- Inline CSS for styling -->
<style>
.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 12px;
    background-color: transparent;
    border-radius: 5px;
    outline: none;
    margin-bottom: 0.5rem;
    position: relative;
}


.slider::before {
    content: "";
    width: 100%;
    height: 8px;
    background: white;
    border: 2px solid black;
    border-radius: 5px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}



.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 24px;
    height: 24px;
    background: white;
    border: 2px solid black;
    cursor: pointer;
    border-radius: 50%;
    z-index: 2;
    position: relative;
}

.slider::-moz-range-thumb {
    width: 24px;
    height: 24px;
    background: white;
    border: 2px solid black;
    cursor: pointer;
    border-radius: 50%;
    z-index: 2;
    position: relative;
}

.slider:hover {
    cursor: pointer;
}

.blue_hover:hover {
    background: #b8afda;
    border: none;
}

.slider {
    background: linear-gradient(to right, orange 0%, orange 50%, white 50%);
}



.custom-input {
    border-width: 2px !important;
    border-color: black !important;
}
</style>



<script>
function updateSliderValue(value) {
    const slider = document.getElementById('experienceSlider');
    const max = slider.max;
    const min = slider.min;
    const percentage = ((value - min) / (max - min)) * 100;

    slider.style.background = `linear-gradient(to right, orange ${percentage}%, white ${percentage}%)`;


    const filledWidth = percentage / 100 * slider.clientWidth;
    slider.style.boxShadow = `
        inset ${filledWidth}px 0 0 0 #f8ac2e, 
        inset 0 0 0 2px black
    `;
}

// Initialize slider fill
updateSliderValue(document.getElementById('experienceSlider').value);
</script>
@endsection