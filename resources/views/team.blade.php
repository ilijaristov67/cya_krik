@extends('layouts.app')

@section('title', 'Meet Our Team - Крик')

@section('content')
<div class="container mx-auto py-20 overflow-hidden">
    <!-- Meet Our Team Header -->
    <div class="text-center">
        <h1 class="text-black font-heading text-5xl mt-4">Запознајте го нашиот тим</h1>
    </div>

    <!-- Team Members Carousel -->
    <div class="relative flex justify-center items-center mt-10" style="height: 700px;">
        <!-- Left Small Team Member -->
        <div id="left-small"
            class="small-member text-center absolute left-0 transform transition-transform duration-500 ease-in-out">
            <img id="left-image" src="images/member3.jpg" alt="Left Team Member" class="member-img rounded-sm">
            <div class="mt-2">
                <p class="text-black font-medium text-sm" id="left-name">Сара Димоска</p>
                <p class="text-black font-medium text-sm mb-2" id="left-role">Координатор во ЦМА Крик</p>
            </div>
        </div>

        <!-- Main Team Member Display -->
        <div id="main-member"
            class="main-member text-center absolute left-1/2 transform -translate-x-1/2 transition-all duration-500 max-w-xs sm:max-w-sm">
            <img id="member-image" src="images/member1.jpg" alt="Team Member" class="member-img rounded-sm">

            <!-- Arrows for Navigation below the image -->
            <div class="flex justify-center mt-4">
                <!-- Left Arrow -->
                <div id="left-arrow"
                    class="arrow bg-black rounded-full flex items-center justify-center cursor-pointer mx-4">
                    <i class="fas fa-chevron-left text-white text-2xl"></i>
                </div>
                <!-- Right Arrow -->
                <div id="right-arrow"
                    class="arrow bg-black rounded-full flex items-center justify-center cursor-pointer mx-4">
                    <i class="fas fa-chevron-right text-white text-2xl"></i>
                </div>
            </div>

            <!-- Name and Role below arrows -->
            <div class="mt-4">
                <h2 class="text-black font-heading text-3xl font-bold" id="member-name">Игор Димовски</h2>
                <p class="text-black font-bold text-xl mb-2" id="member-role">Координатор за волонтери во ЦМА - Крик</p>
            </div>

            <!-- LinkedIn Button below name and role -->
            <a id="linkedin-link" href="#"
                class="linkedin-btn text-white px-3 py-2 rounded-lg mt-4 flex items-center justify-between">
                <span>LinkedIn</span>
                <span class="arrow-icon text-lg">&gt;</span>
            </a>
        </div>

        <!-- Right Small Team Member -->
        <div id="right-small"
            class="small-member text-center absolute right-0 transform transition-transform duration-500 ease-in-out">
            <img id="right-image" src="images/member2.jpg" alt="Right Team Member" class="member-img rounded-sm">
            <div class="mt-2">
                <p class="text-black font-medium text-sm" id="right-name">Матео Тренкоски</p>
                <p class="text-black font-medium text-sm mb-2" id="right-role">практикант во ЦМА Крик</p>
            </div>
        </div>
    </div>

    <!-- Board Members Section -->
    <div class="bg-white py-20">
        <h2 class="text-black font-heading  text-5xl text-center">Членови на Управниот Одбор</h2>
        <div class="mt-16">
            <!-- Board Member 1 -->
            <hr class="my-8 border-black hr-line border-t-2">
            <div class="container  container-60 mx-auto flex flex-col md:flex-row items-center justify-between py-8">
                <div class="w-1/4 text-center">
                    <img src="images/board_member1.png" alt="Board Member 1"
                        class="w-50 h-50 rounded-md mx-auto">
                </div>
                <div class="w-3/4 ml-8">
                    <h3 class="text-black font-heading text-3xl">Lorem Ipsum</h3>
                    <p class="text-black font-heading text-xl">Role of the Member</p>
                    <p class="text-black text-lg mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <!-- Board Member 2 -->
            <hr class="my-8 border-black hr-line border-t-2">
            <div class="container container-60 mx-auto flex flex-col md:flex-row items-center justify-between py-8">
                <div class="w-1/4 text-center">
                    <img src="images/board_member2.jpg" alt="Board Member 2"
                        class="w-50 h-50 rounded-md mx-auto">
                </div>
                <div class="w-3/4 ml-8">
                    <h3 class="text-black font-heading text-3xl">Lorem Ipsum</h3>
                    <p class="text-black font-heading text-xl">Role of the Member</p>
                    <p class="text-black text-lg mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <!-- Board Member 3 -->
            <hr class="my-8 border-black border-t-2 hr-line">
            <div class="container container-60 mx-auto flex flex-col md:flex-row items-center justify-between py-8">
                <div class="w-1/4 text-center">
                    <img src="images/board_member3.jpg" alt="Board Member 3"
                        class="w-50 h-50 rounded-md mx-auto">
                </div>
                <div class="w-3/4 ml-8">
                    <h3 class="text-black font-heading text-3xl">Lorem Ipsum</h3>
                    <p class="text-black font-heading text-xl">Role of the Member</p>
                    <p class="text-black text-lg mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .main-member,
    .small-member {
        transition: all 0.5s ease;
    }

    .member-img {
        transition: transform 0.5s ease;
        width: 250px;
        height: 250px;
        border-radius: 15%;
    }

    .main-member .member-img {
        width: 500px;
        height: 360px;
        border-radius: 15%;
        display: flex;
        margin: 0 auto;
    }

    .arrow {
        width: 50px;
        height: 50px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .arrow:hover {
        transform: scale(1.1);
    }

    .small-member p {
        margin-top: 2px;
    }

    .main-member p,
    .main-member h2 {
        margin-top: 10px;
    }

    #left-small {
        left: 15%;
    }

    #right-small {
        right: 15%;
    }

    /* Bold styling for main member */
    .selected-member {
        font-weight: bold;
    }

    /* LinkedIn button styling */
    .linkedin-btn {
        background-color: #FB5E3C;
        width: 55%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-radius: 30px;
        padding: 0.5rem 1rem;
        margin: 0 auto;
        text-align: left;
        text-decoration: none;
    }

    .linkedin-btn span {
        flex: 1;
    }

    .arrow-icon {
        flex: 0;
        margin-left: 6rem;
    }


    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {

        /* Smaller screen sizes */
        .member-img {
            width: 100px;
            height: 100px;
        }

        .main-member .member-img {
            width: 150px;
            height: 150px;
        }

        #left-small,
        #right-small {
            position: static;
            margin-top: 20px;
        }

        .main-member {
            position: static;
            margin-top: 30px;
        }

        .arrow {
            width: 40px;
            height: 40px;
        }

        .linkedin-btn {
            width: 90%;
        }

        .arrow-icon {
            margin-left: 4rem;
        }
    }


    /* Updated Styles for Board Members Section */
    .border-black {
        border-color: black;
    }

    .rounded-md {
        border-radius: 8px;
    }

    .ml-8 {
        margin-left: 2rem;
    }

    .text-center {
        text-align: center;
    }

    .text-black {
        color: black;
    }

    /* Container-60 for Centering and Width */
    .container-60 {
        width: 60%;
        margin: 0 auto;

    }

    .hr-line {
        border: none;
        border-top: 2px solid black;
        width: 100%;
        margin: 2rem 0;
        padding: 0 2rem;
    }
</style>

<script>
    const teamMembers = [{
            name: "Игор Димовски",
            role: "Координатор за волонтери во ЦМА - Крик",
            image: "images/member1.jpg",
            linkedin: "#"
        },
        {
            name: "Матео Тренкоски",
            role: "практикант во ЦМА Крик",
            image: "images/member2.jpg",
            linkedin: "#"
        },
        {
            name: "Сара Димоска",
            role: "Координатор во ЦМА Крик",
            image: "images/member3.jpg",
            linkedin: "#"
        }
    ];

    let currentIndex = 0;

    function updateMemberDisplay(index) {
        const member = teamMembers[index];
        const leftIndex = (index === 0) ? teamMembers.length - 1 : index - 1;
        const rightIndex = (index === teamMembers.length - 1) ? 0 : index + 1;

        // Update main member
        document.getElementById('member-image').src = member.image;
        document.getElementById('member-name').innerText = member.name;
        document.getElementById('member-role').innerText = member.role;
        document.getElementById('linkedin-link').href = member.linkedin;

        document.getElementById('linkedin-link').style.display = 'block';

        // Update small members
        document.getElementById('left-image').src = teamMembers[leftIndex].image;
        document.getElementById('left-name').innerText = teamMembers[leftIndex].name;
        document.getElementById('left-role').innerText = teamMembers[leftIndex].role;

        document.getElementById('right-image').src = teamMembers[rightIndex].image;
        document.getElementById('right-name').innerText = teamMembers[rightIndex].name;
        document.getElementById('right-role').innerText = teamMembers[rightIndex].role;

        // Remove selected-member class from all and add to the main member
        document.querySelectorAll('.small-member p').forEach((el) => {
            el.classList.remove('selected-member');
        });
        document.getElementById('member-name').classList.add('selected-member');
        document.getElementById('member-role').classList.add('selected-member');
    }

    document.getElementById('left-arrow').addEventListener('click', () => {
        currentIndex = (currentIndex === 0) ? teamMembers.length - 1 : currentIndex - 1;
        updateMemberDisplay(currentIndex);
    });

    document.getElementById('right-arrow').addEventListener('click', () => {
        currentIndex = (currentIndex === teamMembers.length - 1) ? 0 : currentIndex + 1;
        updateMemberDisplay(currentIndex);
    });

    updateMemberDisplay(currentIndex);
</script>
@endsection