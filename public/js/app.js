document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector("[data-collapse-toggle]");
    const navbar = document.getElementById("navbar-default");
    const img1 = document.querySelector("#logoImg");
    const img2 = document.querySelector("#logoImg2");
    const dropdownBtn = document.getElementById("dropdownBtn");
    const customDropdown = document.getElementById("customDropdown");
    const arrowDropDown = document.getElementById("arrow"); // Get the arrow element


    button.addEventListener('click', function () {
        if (navbar.classList.contains('hidden')) {
            navbar.classList.remove('hidden');
            navbar.classList.add('block');
            img1.classList.add('hidden');
            img2.classList.remove('hidden');

        } else {
            navbar.classList.remove("block");
            navbar.classList.add("hidden");
            img1.classList.remove("hidden");
            img2.classList.add("hidden");
        }
    });

    dropdownBtn.addEventListener("click", () => {
        dropdownBtn.style.backgroundColor = "#191919";
        dropdownBtn.style.color = "#FBF8F4";
        customDropdown.classList.toggle("hidden");
        dropdownBtn.style.borderTopLeftRadius = "55px";
        dropdownBtn.style.borderTopRightRadius = "55px";


        dropdownBtn.addEventListener('click', () => {
            dropdownBtn.style.backgroundColor = '#191919';
            dropdownBtn.style.color = '#FBF8F4';
            customDropdown.classList.toggle('hidden');
            dropdownBtn.style.borderTopLeftRadius = '55px';
            dropdownBtn.style.borderTopRightRadius = '55px';

            // Toggle arrow visibility
            arrowDropDown.style.display = 'block';
        });

        window.addEventListener("click", (e) => {
            if (!e.target.closest(".dropdown-container")) {
                customDropdown.classList.add("hidden");
            }
        });

        customDropdown.addEventListener("mouseleave", () => {
            customDropdown.classList.add("hidden");
            dropdownBtn.style.backgroundColor = "#FBB13C";
            dropdownBtn.style.color = "#191919";
            arrowDropDown.style.display = "none";
            dropdownBtn.style.borderRadius = "30px";
        });

        let liElements = document.querySelectorAll(".li-elements");
        liElements.forEach((li) => {
            li.addEventListener("click", () => {
                li.style.color = "white";
                li.style.backgroundColor = "black";
                setTimeout(() => {
                    li.style.color = "";
                    li.style.backgroundColor = "";
                }, 100);
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const navItems = document.querySelectorAll(".nav-item");
        const underline = document.querySelector(".underline");
        const forms = document.querySelectorAll(".form");
        let activeItem = navItems[0];

        function moveUnderline(item) {
            const itemRect = item.getBoundingClientRect();
            const containerRect = item.parentElement.getBoundingClientRect();

            const offsetLeft =
                itemRect.left - containerRect.left + item.parentElement.scrollLeft;
            const itemWidth = itemRect.width;

            underline.style.transform = `translateX(${offsetLeft - 30}px)`;
            underline.style.width = `${itemWidth}px`;
        }

        function showForm(formId) {
            forms.forEach((form) => {
                form.classList.add("hidden");
            });
            const activeForm = document.getElementById(formId);
            if (activeForm) {
                activeForm.classList.remove("hidden");
            }
        }

        navItems.forEach((item) => {
            item.addEventListener("click", (e) => {
                e.preventDefault();
                const formId = item.getAttribute("data-form");
                navItems.forEach((i) => i.classList.remove("active"));
                item.classList.add("active");
                activeItem = item;
                moveUnderline(item);
                showForm(formId);
            });

            item.addEventListener("mouseenter", () => {
                moveUnderline(item);
            });

            item.addEventListener("mouseleave", () => {
                moveUnderline(activeItem);
            });
        });

        moveUnderline(activeItem);
        showForm(activeItem.getAttribute("data-form"));
    });

    const radios = document.querySelectorAll('input[name="amount"]');
    const toggleButtons = document.querySelectorAll(".toggle-btn");
    radios.forEach((radio, index) => {
        radio.addEventListener("change", function () {
            toggleButtons.forEach((btn, i) => {
                if (i === index) {
                    btn.classList.remove("border-black", "text-black");
                    btn.classList.add("bg-black", "text-white");
                } else {
                    btn.classList.remove("bg-black", "text-white");
                    btn.classList.add("border-black", "text-black");
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const donationFormDiv = document.getElementById("form-donation-div");
        const firstDonationForm = document.getElementById("form_donations");

        donationFormDiv.style.display = "none";

        firstDonationForm.addEventListener("submit", function (event) {
            event.preventDefault();
            donationFormDiv.style.display = "block";
        });
    });

    /**
     * Toggle favorite icons on eshop product card
     */
// Select all favorite buttons
    const favoriteIcons = document.querySelectorAll(".favoriteIcon");

// Loop through each button and add an event listener
    favoriteIcons.forEach((favoriteIcon) => {
        let isSelected = false; // Define the state for each individual button

        favoriteIcon.addEventListener("click", function () {
            console.log("clicked");
            const selectedIcon = `<svg width="50" height="50" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.5 30C1.5 14.2599 14.2599 1.5 30 1.5C45.7401 1.5 58.5 14.2599 58.5 30C58.5 45.7401 45.7401 58.5 30 58.5C14.2599 58.5 1.5 45.7401 1.5 30Z" fill="#FBF8F4" stroke="#191919" stroke-width="3"/>
        <path d="M39.2076 15.2656C35.4049 15.2656 32.0754 16.8266 30 19.465C27.9246 16.8266 24.5951 15.2656 20.7924 15.2656C17.7654 15.2689 14.8633 16.4182 12.7229 18.4613C10.5824 20.5044 9.37841 23.2746 9.375 26.1641C9.375 38.4688 28.4881 48.4285 29.3021 48.8398C29.5166 48.95 29.7564 49.0077 30 49.0077C30.2436 49.0077 30.4834 48.95 30.6979 48.8398C31.5119 48.4285 50.625 38.4688 50.625 26.1641C50.6216 23.2746 49.4176 20.5044 47.2771 18.4613C45.1367 16.4182 42.2346 15.2689 39.2076 15.2656ZM30 45.9922C26.6374 44.1219 12.3214 35.6018 12.3214 26.1641C12.3244 24.0204 13.2178 21.9653 14.8058 20.4495C16.3937 18.9337 18.5467 18.0809 20.7924 18.0781C24.3742 18.0781 27.3814 19.8992 28.6373 22.8242C28.7483 23.0821 28.9371 23.3027 29.1797 23.458C29.4224 23.6132 29.7079 23.6961 30 23.6961C30.2921 23.6961 30.5776 23.6132 30.8203 23.458C31.0629 23.3027 31.2517 23.0821 31.3627 22.8242C32.6186 19.8939 35.6258 18.0781 39.2076 18.0781C41.4533 18.0809 43.6063 18.9337 45.1942 20.4495C46.7822 21.9653 47.6756 24.0204 47.6786 26.1641C47.6786 35.5877 33.3589 44.1201 30 45.9922Z" fill="#191919"/>
        </svg>`;

            const nonSelectedIcon = `<svg width="50" height="50" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.5 30C1.5 14.2599 14.2599 1.5 30 1.5C45.7401 1.5 58.5 14.2599 58.5 30C58.5 45.7401 45.7401 58.5 30 58.5C14.2599 58.5 1.5 45.7401 1.5 30Z" fill="#FBF8F4" stroke="#191919" stroke-width="3"/>
        <path d="M39.2076 15.2656C35.4049 15.2656 32.0754 16.8266 30 19.465C27.9246 16.8266 24.5951 15.2656 20.7924 15.2656C17.7654 15.2689 14.8633 16.4182 12.7229 18.4613C10.5824 20.5044 9.37841 23.2746 9.375 26.1641C9.375 38.4688 28.4881 48.4285 29.3021 48.8398C29.5166 48.95 29.7564 49.0077 30 49.0077C30.2436 49.0077 30.4834 48.95 30.6979 48.8398C31.5119 48.4285 50.625 38.4688 50.625 26.1641C50.6216 23.2746 49.4176 20.5044 47.2771 18.4613C45.1367 16.4182 42.2346 15.2689 39.2076 15.2656ZM30 45.9922C26.6374 44.1219 12.3214 35.6018 12.3214 26.1641C9.375 39.1049 43.2958 60.9746 28.6373 34.8192C30.2253 33.3034 27.2185 46.6077 29.4643 46.6049C33.046 46.6049 26.6012 24.3942 27.8571 27.3192C27.9681 27.5771 28.8014 40.1763 29.1797 23.458C17.6786 26.7835 32.9222 30.5335 33.2143 30.5335C33.5064 30.5335 33.5074 24.2602 33.75 24.1049C33.9926 23.9497 31.4961 22.22 31.6071 21.9621C32.8631 19.0318 24.8111 35.8906 28.3929 35.8906C30.6386 35.8934 30.6331 44.0177 32.2211 45.5335C33.8091 47.0493 31.6042 31.0684 31.6071 33.2121C31.6071 42.6357 33.3589 44.1201 30 45.9922Z" fill="#191919"/>
        </svg>
        `;

            // Toggle the icon depending on isSelected state
            if (isSelected) {
                favoriteIcon.innerHTML = selectedIcon;
            } else {
                favoriteIcon.innerHTML = nonSelectedIcon;
            }

            isSelected = !isSelected; // Toggle the state
        });
    });


    document.addEventListener("DOMContentLoaded", function () {
        const navItems = document.querySelectorAll(".nav-item_ilija");
        const underline = document.querySelector(".underline_ilija");
        const forms = document.querySelectorAll(".form_ilija");
        let activeItem = navItems[0];

        function moveUnderline(item) {
            const itemRect = item.getBoundingClientRect();
            const containerRect = item.parentElement.getBoundingClientRect();


            const offsetLeft = itemRect.left - containerRect.left + item.parentElement.scrollLeft;
            const itemWidth = itemRect.width;

            underline.style.transform = `translateX(${offsetLeft}px)`;
            underline.style.width = `${itemWidth}px`;
        }

        function showForm(formId) {
            forms.forEach(form => {
                form.classList.add('hidden');
            });
            const activeForm = document.getElementById(formId);
            if (activeForm) {
                activeForm.classList.remove('hidden');
            }
        }

        navItems.forEach((item) => {
            item.addEventListener("click", (e) => {
                e.preventDefault();
                const formId = item.getAttribute("data-form");
                navItems.forEach(i => i.classList.remove('active'));
                item.classList.add('active');
                activeItem = item;
                moveUnderline(item);
                showForm(formId);
            });

            item.addEventListener("mouseenter", () => {
                moveUnderline(item);
            });

            item.addEventListener("mouseleave", () => {
                moveUnderline(activeItem);
            });
        });

        moveUnderline(activeItem);
        showForm(activeItem.getAttribute("data-form"));
    });
    const radios_ilija = document.querySelectorAll('input[name="amount"]');
    const toggleButtons_ilija = document.querySelectorAll('.toggle-btn');
    radios_ilija.forEach((radio, index) => {
        radio.addEventListener('change', function () {
            toggleButtons_ilija.forEach((btn, i) => {
                if (i === index) {
                    btn.classList.remove('border-black', 'text-black');
                    btn.classList.add('bg-black', 'text-white');
                } else {
                    btn.classList.remove('bg-black', 'text-white');
                    btn.classList.add('border-black', 'text-black');
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const donationFormDiv = document.getElementById('form-donation-div');
        const firstDonationForm = document.getElementById('form_donations');

        donationFormDiv.style.display = 'none';

        firstDonationForm.addEventListener('submit', function (event) {
            event.preventDefault();
            donationFormDiv.style.display = 'block';
        });
    });
});
