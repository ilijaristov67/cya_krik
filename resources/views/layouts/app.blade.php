<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--FAVICON--}}
    <link rel="shortcut icon" href="Крик-лого.png" type="image/x-icon">

    {{--CUSTOM FONTS CDN--}}
    <link href="https://fonts.google.com/specimen/Mulish?query=mulish">
    <link href="https://fonts.google.com/specimen/Montserrat?query=mont">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    {{--CUSTOM STYLESHEETS--}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{--FONTAWESOME CDN--}}
    <script src="https://kit.fontawesome.com/7cba051bd4.js" crossorigin="anonymous"></script>

    {{--TAILWIND CONFIGURATION--}}
    @vite('resources/css/app.css')

    <title>KRIK | @yield('title', 'Default Title')</title>






    <!-- Responsive voice.js library -->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=ON3zvS0U"></script>






    <!-- Style for the widget -->
    <style>
    /* Styles for the buttons */

    /* Hide the accessibility container initially */
    #accessibility-container {
        display: none;
    }

    /* Optional: Style for the toggle button */
    #toggle-widget-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 15px 20px;
        background-color: #ff6347;
        /* Tomato red */
        color: #ffffff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
        font-size: 18px;
        font-weight: bold;
        z-index: 1000;
        /* Ensure the toggle button is above other elements */
    }




    /* General Styling for Accessibility Widget */
    .accessibility-widget {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 15px;
        /* Space between buttons */
        padding: 20px;
        background-color: #f7f7f7;
        /* Light background for contrast */
        border-radius: 10px;
        /* Rounded corners for the widget */
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        /* Subtle shadow for depth */
    }

    /* Accessibility Buttons */
    .accessibility-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 220px;
        /* Adjust button width */
        padding: 15px 20px;
        /* Increased padding for easier clicking */
        font-size: 18px;
        /* Larger font size */
        font-weight: bold;
        /* Bold text for readability */
        color: #ffffff;
        /* White text color */
        background-color: #ff6347;
        /* Main button color - Tomato red */
        border: none;
        /* Remove default border */
        border-radius: 8px;
        /* Rounded corners */
        cursor: pointer;
        /* Pointer cursor */
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
        /* Shadow for depth */
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        /* Smooth transition */
    }

    /* Hover and Focus States */
    .accessibility-btn:hover,
    .accessibility-btn:focus {
        background-color: #e5533f;
        /* Slightly darker on hover */
        transform: translateY(-2px);
        /* Lift effect */
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        /* Enhanced shadow */
        outline: none;
        /* Remove outline on focus */
    }

    /* Active State */
    .accessibility-btn:active {
        transform: translateY(0);
        /* Remove lift effect */
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        /* Subtle shadow */
    }

    /* Icon Styling */
    .accessibility-btn i {
        margin-right: 8px;
        /* Space between icon and text */
        font-size: 22px;
        /* Icon size */
    }

    /* Special State for Oversized Widget (Toggle) */
    /* Active State - Change button background to green when active */
    .accessibility-btn.active {
        background-color: #32cd32;
        /* Lime green background color */
        color: #ffffff;
        /* Ensure text is visible */
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        /* Slight shadow */
    }


    /* Styling for High Contrast Mode Button */
    .accessibility-btn.high-contrast {
        background-color: #000000;
        /* Black background */
        color: #ffffff;
        /* White text */
    }




    /* Custom styles for accessibility features */
    .large-cursor {
        cursor: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzIiIHdpZHRoPSIyMCIgdmlld0JveD0iMCAwIDMyMCA1MTIiPjxwYXRoIGQ9Ik0wIDU1LjJMMCA0MjZjMCAxMi4yIDkuOSAyMiAyMiAyMmM2LjMgMCAxMi40LTIuNyAxNi42LTcuNUwxMjEuMiAzNDZsNTguMSAxMTYuM2M3LjkgMTUuOCAyNy4xIDIyLjIgNDIuOSAxNC4zczIyLjItMjcuMSAxNC4zLTQyLjlMMTc5LjggMzIwbDExOC4xIDBjMTIuMiAwIDIyLjEtOS45IDIyLjEtMjIuMWMwLTYuMy0yLjctMTIuMy03LjQtMTYuNUwzOC42IDM3LjlDMzQuMyAzNC4xIDI4LjkgMzIgMjMuMiAzMkMxMC40IDMyIDAgNDIuNCAwIDU1LjJ6Ii8+PC9zdmc+'), auto;
    }

    .high-contrast {
        filter: invert(1) hue-rotate(180deg);
        background-color: black;
        color: white;
    }

    .reading-mask {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background: rgba(0, 0, 0, 0.5);
        pointer-events: none;
    }

    .desaturate {
        filter: grayscale(100%);
    }

    .paused-animation * {
        animation-play-state: paused !important;
        transition: none !important;
    }
    </style>
</head>

<body class="bg-whiteBackground">
    {{--NEWSLETTER HEADER BAR--}}
    @include('layouts.newsletter_bar')
    {{--NAVBAR--}}
    @include('layouts.navbar')


    {{--MAIN CONTENT--}}
    <!-- Tried to add id=content for the widget -->
    <div class="h-[130px]"></div>

    <!-- Toggle Button -->
    <button id="toggle-widget-button" class="accessibility-btn">
        <i class="fa fa-universal-access"></i> Accessibility Options
    </button>

    <!-- Accessibility Widget Container (Initially Hidden) -->
    <div id="accessibility-container" style="display: none;">
        <div class="accessibility-widget">
            <button onclick="toggleCursorSize()" class="accessibility-btn">
                <i class="fa fa-mouse-pointer"></i> Cursor Size
            </button>
            <button id="screen-reader-button" class="accessibility-btn">
                <i class="fa fa-volume-up"></i> Screen Reader
            </button>
            <button onclick="toggleContrast()" class="accessibility-btn">
                <i class="fa fa-adjust"></i> Contrast
            </button>
            <button onclick="toggleReadingMask()" class="accessibility-btn">
                <i class="fa fa-eye"></i> Reading Mask
            </button>
            <button onclick="togglePauseAnimation()" class="accessibility-btn">
                <i class="fa fa-pause"></i> Pause Animation
            </button>
            <button onclick="toggleSaturation()" class="accessibility-btn">
                <i class="fa fa-palette"></i> Saturation
            </button>
        </div>
    </div>



    <!-- Page content -->
    <div id="content">
        @yield('content')
    </div>


    {{--FOOTER--}}
    @include('layouts.footer')

    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://kit.fontawesome.com/d1b1f864c2.js" crossorigin="anonymous"></script>




    <!-- JavaScript for the widget -->
    <script>
    // Function to toggle the visibility of the accessibility widget container
    function toggleAccessibilityWidget() {
        const container = document.getElementById('accessibility-container');
        if (container.style.display === 'none' || container.style.display === '') {
            container.style.display = 'block'; // Show the container
        } else {
            container.style.display = 'none'; // Hide the container
        }
    }

    // Attach event listener to the toggle button
    document.getElementById('toggle-widget-button').addEventListener('click', toggleAccessibilityWidget);




    // Function to toggle the active state of the button
    function toggleActiveState(event) {
        // Find the button that was clicked
        const button = event.target.closest('.accessibility-btn');

        // Check if the button is currently active
        if (button.classList.contains('active')) {
            // If it is active, remove the 'active' class to revert to original state
            button.classList.remove('active');
        } else {
            // Remove active class from all buttons
            document.querySelectorAll('.accessibility-btn').forEach(btn => btn.classList.remove('active'));

            // Add active class to the clicked button
            button.classList.add('active');
        }
    }

    // Attach event listener to all buttons
    document.querySelectorAll('.accessibility-btn').forEach(button => {
        button.addEventListener('click', toggleActiveState);
    });





    function toggleCursorSize() {
        document.body.classList.toggle('large-cursor');
    }






    // Function to toggle screen reader functionality
    function toggleScreenReader() {
        // Cancel any ongoing speech
        if (responsiveVoice.isPlaying()) {
            responsiveVoice.cancel();
            return;
        }

        // Extract visible text content from the #content element
        let content = getVisibleText(document.getElementById('content'));

        // Check if there is any content to read
        if (!content) {
            alert('No readable content found.');
            return;
        }

        // Check available voices
        const voices = responsiveVoice.getVoices();
        console.log(voices); // Log available voices to the console for debugging

        // Check if the desired voice is available, otherwise use a fallback
        const availableVoice = voices.find(voice => voice.name === 'Serbian Male') ? 'Serbian Male' : 'UK English Male';

        // Speak the text content using ResponsiveVoice
        responsiveVoice.speak(content, availableVoice, {
            rate: 0.8,
            pitch: 1,
            volume: 1
        });
    }

    // Function to get visible text from an element, excluding hidden or non-readable content
    function getVisibleText(element) {
        if (!element) return '';

        let text = '';

        // Recursively get visible text
        element.childNodes.forEach(child => {
            if (child.nodeType === Node.TEXT_NODE && isVisible(child)) {
                // Add the text content of the visible text node
                text += child.textContent + ' ';
            } else if (child.nodeType === Node.ELEMENT_NODE && isVisible(child)) {
                // Recursively get text from child elements if visible
                text += getVisibleText(child);
            }
        });

        // Replace multiple spaces with a single space and trim the result
        return text.replace(/\s+/g, ' ').trim();
    }

    // Function to check if an element is visible
    function isVisible(element) {
        // Check if the element or its parent is hidden with display:none or visibility:hidden
        return element.nodeType === Node.TEXT_NODE ||
            (element.offsetParent !== null &&
                window.getComputedStyle(element).visibility !== 'hidden' &&
                window.getComputedStyle(element).display !== 'none');
    }

    // Attach event to the button
    document.getElementById('screen-reader-button').addEventListener('click', toggleScreenReader);









    function toggleContrast() {
        document.body.classList.toggle('high-contrast');
    }

    function toggleReadingMask() {
        const mask = document.querySelector('.reading-mask');
        if (!mask) {
            const newMask = document.createElement('div');
            newMask.className = 'reading-mask';
            document.body.appendChild(newMask);
            window.addEventListener('mousemove', (e) => {
                newMask.style.top = `${e.clientY - 25}px`;
            });
        } else {
            mask.remove();
        }
    }

    function togglePauseAnimation() {
        document.body.classList.toggle('paused-animation');
    }

    function toggleSaturation() {
        document.body.classList.toggle('desaturate');
    }
    </script>


</body>

</html>