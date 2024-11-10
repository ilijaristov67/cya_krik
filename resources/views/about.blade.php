@extends('layouts.app')

@section('title', 'За Нас - Крик')

@section('content')
<div class="container mx-auto pb-20 mt-[5rem] w-3/4">
    <!-- Header Section -->
    <div class="flex flex-wrap lg:flex-nowrap items-stretch mb-12">
        <!-- Image Section (Left Aligned) -->
        <div class="w-full lg:w-1/2 flex justify-center lg:justify-start lg:pr-8">
            <img src="{{ asset('images/about-image.jpg') }}" alt="About Image"
                class="rounded-lg shadow-lg grayscale object-cover w-full h-full"
                style="height: 100%; object-fit: cover;">
        </div>

        <!-- Text Section (Right Aligned) -->
        <div class="w-full lg:w-1/2 flex flex-col lg:pl-8 justify-center">
            <h1 class="font-heading text-2xl font-semibold text-black mb-4">Центарот за младинскиот активизам Крик е
                невладина,
                непрофитна организација основана од страна на млади луѓе, предводена од млади луѓе и работи за и со
                млади луѓе.
            </h1>
            <p class="text-lg leading-relaxed text-gray-700">
                Целната група со која КРИК работи се сите луѓе (но главно млади) кои сакаат да придонесат и направат
                промени во полето на екологија, критичко размислување и комуникациски вештини, како и работење за
                благосостојба на социјално исклучените групи од општеството и маргинализираните групи. Крик се стреми
                кон поттикнување на поголема партиципација на младите, младински активизам, да ги ограбри младите луѓе
                да бидат повеќе вклучени во процесот на креирање на политики на локално и на национално ниво.
            </p>
        </div>
    </div>

    <!-- "За Крик" Section -->
    <div class="container mx-auto py-6">
        <h2 class="text-3xl font-heading font-semibold text-black mb-2">За Крик</h2>
        <hr class="border-t-2 border-gray-600 absolute left-0 right-0 w-full">

        <!-- Мисија Row -->
        <div class="flex flex-col md:flex-row items-start py-4">
            <div class="w-full md:w-1/3 lg:w-1/4 pe-2">
                <h3 class="text-xl font-heading font-semibold" style="color: #FB5E3C;">Мисија</h3>
            </div>
            <div class="w-full md:w-2/3 lg:w-3/4">
                <p class="text-gray-700">
                    Да понуди активности за зајакнување на капацитетите на младите и лицата со попреченост преку развој
                    на младинската работа и обезбедување услуги за социјална заштита.

                </p>
            </div>
        </div>
        <hr class="border-t-2 border-gray-600 absolute left-0 right-0 w-full">

        <!-- Визија Row -->
        <div class="flex flex-col md:flex-row items-start py-4">
            <div class="w-full md:w-1/3 lg:w-1/4 pe-2">
                <h3 class="font-heading text-xl font-semibold" style="color: #FB5E3C;">Визија</h3>
            </div>
            <div class="w-full md:w-2/3 lg:w-3/4">
                <p class="text-gray-700">
                    Да создаде инклузивно општество каде младите и лицата со попреченост се подеднакво вклучени и имаат
                    целосно развиени капацитети активно да придонесуваат за заедницата.
                </p>
            </div>
        </div>
        <hr class="border-t-2 border-gray-600 absolute left-0 right-0 w-full">

        <!-- Нашите Вредности Row -->
        <div class="flex flex-col md:flex-row items-start py-4">
            <div class="w-full md:w-1/3 lg:w-1/4 pe-2">
                <h3 class=" font-heading text-xl font-semibold" style="color: #FB5E3C;">Нашите Вредности</h3>
            </div>
            <div class="w-full md:w-2/3 lg:w-3/4">
                <p class="text-gray-700">
                    Развојот на младинската работа, поттикнување младински активизам и волонтеризам. Поголема
                    вклученост на младите исклучени од општеството преку учество на работилници, настани и обуки.
                    Развој на услуги за социјална заштита, сместување и грижа за лица со интелектуална и/или телесна
                    попреченост и други услови. Поттикнување на социјална вклученост на маргинализираните групи млади и
                    возрасни во сите сфери на општественото делување.

                </p>
            </div>
        </div>
        <hr class="border-t-2 border-gray-600 absolute left-0 right-0 w-full">
    </div>


    <!-- FAQ Section -->
    <div class="mb-12">
        <h2 class=" font-heading text-3xl font-semibold text-black mb-4">Најчесто Поставувани Прашања</h2>
        <div class="space-y-4">
            @foreach (range(1, 5) as $i)
            <div id="faq-{{ $i }}"
                class="rounded-2xl overflow-hidden bg-white hover:bg-purple-200 transition duration-300">
                <div class="flex justify-between items-center p-4 cursor-pointer" onclick="toggleFaq({{ $i }})">
                    <span class="font-semibold text-lg text-black">0{{ $i }}. Lorem ipsum?</span>
                    <div class="icon-circle" id="icon-container-{{ $i }}">
                        <i class="fa-solid fa-plus text-black" id="icon-{{ $i }}"></i>
                    </div>
                </div>
                <div class="p-4 hidden" id="answer-{{ $i }}">
                    <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quo nulla
                        possimus tenetur consectetur quisquam est iusto? Nemo similique quidem repellendus id ea,
                        cupiditate sunt fugiat voluptatem! Deserunt molestias consequatur distinctio autem mollitia,
                        dicta dolor.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
function toggleFaq(id) {
    const answer = document.getElementById(`answer-${id}`);
    const icon = document.getElementById(`icon-${id}`);
    const iconContainer = document.getElementById(`icon-container-${id}`);
    const faqItem = document.getElementById(`faq-${id}`);

    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        answer.classList.add('block');
        icon.classList.remove('fa-plus');
        icon.classList.add('fa-circle-minus');
        iconContainer.classList.add('border-none');
        iconContainer.style.border = 'none';
        icon.style.fontSize = '1.5rem';
        faqItem.classList.remove('bg-white');
        faqItem.classList.add('bg-[#B8AFDA]');
    } else {
        answer.classList.remove('block');
        answer.classList.add('hidden');
        icon.classList.remove('fa-circle-minus');
        icon.classList.add('fa-plus');
        iconContainer.classList.remove('border-none');
        iconContainer.style.border = '2px solid black';
        icon.style.fontSize = '1rem';
        faqItem.classList.remove('bg-[#B8AFDA]');
        faqItem.classList.add('bg-white');
    }
}
</script>
<style>
.icon-circle {
    border: 2px solid black;
    border-radius: 50%;
    padding: 5px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
}
</style>

@endsection
