@extends('layouts.app')
@section('title', 'Donations Page')
@section('content')
<h1 class="text-5xl font-semibold text-center py-10 mt-10">Донираj!</h1>
<div class="m-auto w-3/4">
    <nav class="relative flex w-full space-x-4 border-b border-lightGray ">
        <a href="#" class="text-center w-1/2 relative px-4 py-5 text-black nav-item_ilija hover:text-black text-2xl font-semibold" data-form="form-1">Индивидуа</a>
        <a href="#" class="text-center w-1/2 relative px-4 py-5 text-black nav-item_ilija hover:text-black text-2xl font-semibold" data-form="form-2">Организација/Претпријатие</a>
        <div class="absolute bottom-0 left-0 h-2 underline_ilija transition-all duration-300 ease-in-out bg-orange-500 rounded-full"></div>
    </nav>
</div>
<div class="mt-24 p-20 font bg-white rounded-3xl w-3/4 shadow-2xl m-auto mb-5">
    <form id="form_donations" class="form_ilija bg-white border-rounded" action="#">
        <h2 class="text-2xl mb-6 font-semibold">Lorem ipsum dolor sit amet consectetur.</h2>
        <div class="flex justify-between space-x-4 mt-6">
            <label class="relative cursor-pointer hover:bg-gray-200 rounded-full">
                <input type="radio" name="amount" value="1000" class="absolute opacity-0 w-full h-full cursor-pointer border-3 " />
                <div class=" toggle-btn w-[220px] px-4 py-3 border-3 border-black text-black rounded-full flex items-center justify-center transition ">
                    1000 Ден
                </div>
            </label>
            <label class="relative cursor-pointer hover:bg-gray-200 rounded-full">
                <input type="radio" name="amount" value="3000" class="absolute opacity-0 w-full h-full cursor-pointer" />
                <div class="toggle-btn w-[220px] px-4 py-3 border-3 border-black text-black rounded-full flex items-center justify-center transition">
                    3000 Ден
                </div>
            </label>
            <label class="relative cursor-pointer hover:bg-gray-200 rounded-full">
                <input type="radio" name="amount" value="6000" class="absolute opacity-0 w-full h-full cursor-pointer" />
                <div class="toggle-btn w-[200px] px-4 py-3 border-3 border-black text-black rounded-full flex items-center justify-center transition">
                    6000 Ден
                </div>
            </label>
            <select id="currency_select" name="currency" class="w-[220px] px-4 py-3 border-3 border-black text-black rounded-full">
                <option value="" selected disabled> Промени Валута</option>
                <option value="MKD">МКД</option>
                <option value="EUR">EUR</option>
                <option value="USD">USD</option>
            </select>
        </div>
        <div class="py-8 w-3/4 text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi impedit quod maxime velit commodi molestias consequuntur. Sequi quae ad facere praesentium sint ipsam explicabo ratione? Perspiciatis vel sint et unde totam dolorem nostrum quos itaque rem. Voluptate inventore molestias placeat mollitia, autem aut nam rem doloremque, sapiente non porro quaerat.</div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-lg font-medium ">Друг износ:</label>
            <input type="email" id="email" class="border border-black border-3 rounded-3xl  rounded-3xl  focus:border-blue-500 block w-[250px] px-4 py-2.5 focus:placeholder-transparent cursor-pointer hover:bg-gray-200 hover:placeholder-black placeholder:text-lg" placeholder="Input" />
        </div>
        <div class="flex w-[350px] justify-between py-5">
            <button class="bg-black w-[170px] rounded-full text-white p-3 font-semibold text-xl" type="submit">Донирај со <img style="display: inline;" class="w-[30px]"
                    src="/images/credit_card.png" alt="crdit_card"></button>
            <button class="bg-orange w-[170px] rounded-full p-3 font-semibold text-xl" type="submit">PayPal</button>
        </div>
    </form>
</div>
<!-- Form 1 -->
<div id="form-donation-div">

    <div class="container mx-auto p-8 w-3/4">
        <form id="form-1" action="#" method="" class="form_ilija hidden grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="col-span-1">
                <label for="donator-name" class="block text-lg font-semibold">Име на Донатор*</label>
                <input type="text" id="donator-name" placeholder="Example Namington"
                    class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
            </div>
            <div class="col-span-1">
                <label for="card-number" class="block text-lg font-semibold">Број на картичка*</label>
                <div class="relative">
                    <input type="text" id="card-number" placeholder="****  ****  ****  ****"
                        class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <i class="fa-brands fa-2xl fa-cc-mastercard p-1"></i>
                        <i class="fa-brands fa-2xl fa-cc-visa p-1"></i>
                        <i class="fa-brands fa-2xl fa-cc-discover p-1"></i>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <label for="email" class="block text-lg font-semibold">Email*</label>
                <input type="email" id="email" placeholder="example@email.com"
                    class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
            </div>
            <div class="col-span-1 grid grid-cols-2 gap-6">
                <div>
                    <label for="expiry-date" class="block text-lg font-semibold">MM/YY</label>
                    <input type="text" id="expiry-date" placeholder="MM/YY"
                        class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
                </div>
                <div>
                    <label for="cvv" class="block text-lg font-semibold">CVV</label>
                    <input type="text" id="cvv" placeholder="CVV"
                        class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
                </div>
            </div>
            <div class="col-span-1">
                <label for="phone-number" class="block text-lg font-semibold">Телефонски број*</label>
                <input type="text" id="phone-number" placeholder="+389000000000"
                    class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
            </div>
            <div class="col-span-1">
                <label for="cardholder-name" class="block text-lg font-semibold">Име на сопственик*</label>
                <input type="text" id="cardholder-name" placeholder="Example Namington"
                    class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
            </div>

            <div class="col-span-2 grid grid-cols-2 gap-6">
                <div>
                    <label for="donation-amount" class="block text-lg font-semibold">Сума за донирање*</label>
                    <input type="text" id="donation-amount" placeholder="a million?"
                        class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
                </div>
                <div class="flex justify-center items-end">
                    <button type="submit" class="bg-red text-white px-6 py-3 rounded-full text-lg w-full form-submit-button">Донирај</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Form 2 -->
    <div class="container mx-auto p-8 w-3/4">
        <form id="form-2" action="#" method="" class="form_ilija hidden grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="col-span-1">
                <label for="donator-name" class="block text-lg font-semibold">Име на Донатор*</label>
                <input type="text" id="donator-name" placeholder="Example Namington"
                    class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
            </div>
            <div class="col-span-1">
                <label for="card-number" class="block text-lg font-semibold">Број на картичка*</label>
                <div class="relative">
                    <input type="text" id="card-number" placeholder="****  ****  ****  ****"
                        class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <i class="fa-brands fa-2xl fa-cc-mastercard p-1"></i>
                        <i class="fa-brands fa-2xl fa-cc-visa p-1"></i>
                        <i class="fa-brands fa-2xl fa-cc-discover p-1"></i>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <label for="email" class="block text-lg font-semibold">Email*</label>
                <input type="email" id="email" placeholder="example@email.com"
                    class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
            </div>
            <div class="col-span-1 grid grid-cols-2 gap-6">
                <div>
                    <label for="expiry-date" class="block text-lg font-semibold">MM/YY</label>
                    <input type="text" id="expiry-date" placeholder="MM/YY"
                        class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
                </div>
                <div>
                    <label for="cvv" class="block text-lg font-semibold">CVV</label>
                    <input type="text" id="cvv" placeholder="CVV"
                        class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
                </div>
            </div>
            <div class="col-span-1">
                <label for="phone-number" class="block text-lg font-semibold">Телефонски број*</label>
                <input type="text" id="phone-number" placeholder="+389000000000"
                    class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
            </div>
            <div class="col-span-1">
                <label for="cardholder-name" class="block text-lg font-semibold">Име на сопственик*</label>
                <input type="text" id="cardholder-name" placeholder="Example Namington"
                    class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
            </div>

            <div class="col-span-2 grid grid-cols-2 gap-6">
                <div>
                    <label for="donation-amount" class="block text-lg font-semibold">Сума за донирање*</label>
                    <input type="text" id="donation-amount" placeholder="a million?"
                        class="mt-1 p-3 w-full border-2 border-black rounded-full placeholder-gray-300 cursor-pointer placeholder:text-xl placeholder:font-semibold hover:bg-gray-200 focus:placeholder-transparent focus:bg-transparent">
                </div>
                <div class="flex justify-center items-end">
                    <button type="submit" class="bg-red text-white px-6 py-3 rounded-full text-lg w-full form-submit-button">Донирај</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection