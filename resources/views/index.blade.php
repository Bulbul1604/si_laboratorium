<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('dist/assets/logos/favicon.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    {{--
    <link rel="stylesheet" href="{{ asset('dist/styles.css') }}" /> --}}
    {{-- <script src="{{ asset('dist/script.js') }}"></script> --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:wght@100;200;300;400;500;600;700;800;900&family=Slackside+One&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Overpass', sans-serif !important;
        }

        .font-lab {
            font-family: 'Slackside One', cursive !important;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    @include('home.navbar')

    <!-- Hero -->
    @include('home.hero')

    <!-- How it works -->
    {{-- <section class="text-white bg-black sectionSize">
        <div>
            <h2 class="secondaryTitle bg-underline2 bg-100%">How it works</h2>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex flex-col items-center flex-1 mx-8 my-4">
                <div
                    class="flex items-center justify-center w-12 h-12 mb-3 text-black border-2 rounded-full bg-[#f4f2ed] h-screen">
                    1
                </div>
                <h3 class="mb-2 text-xl font-medium font-montserrat">Eat</h3>
                <p class="text-center font-montserrat">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </p>
            </div>
            <div class="flex flex-col items-center flex-1 mx-8 my-4">
                <div
                    class="flex items-center justify-center w-12 h-12 mb-3 text-black border-2 rounded-full bg-[#f4f2ed] h-screen">
                    2
                </div>
                <h3 class="mb-2 text-xl font-medium font-montserrat">Sleep</h3>
                <p class="text-center font-montserrat">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </p>
            </div>
            <div class="flex flex-col items-center flex-1 mx-8 my-4">
                <div
                    class="flex items-center justify-center w-12 h-12 mb-3 text-black border-2 rounded-full bg-[#f4f2ed] h-screen">
                    3
                </div>
                <h3 class="mb-2 text-xl font-medium font-montserrat">Rave</h3>
                <p class="text-center font-montserrat">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
    </section> --}}

    <!-- Features -->
    {{-- <section class="sectionSize bg-[#f4f2ed] h-screen">
        <div>
            <h2 class="secondaryTitle bg-underline3 bg-100%">Features</h2>
        </div>
        <div class="md:grid md:grid-cols-2 md:grid-rows-2">

            <div class="flex items-start my-6 mr-10 font-montserrat">
                <img src='dist/assets/logos/Heart.svg' alt='' class="mr-4 h-7" />
                <div>
                    <h3 class="text-2xl font-semibold">Feature #1</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Quisquam voluptate praesentium tenetur earum repellendus! Dicta
                        culpa consequuntur saepe quibusdam labore, est ex ducimus
                        tempore, quos illum officiis, pariatur ea placeat.
                    </p>
                </div>
            </div>

            <div class="flex items-start my-6 mr-10 font-montserrat">
                <img src='dist/assets/logos/Heart.svg' alt='' class="mr-4 h-7" />
                <div>
                    <h3 class="text-2xl font-semibold">Feature #2</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Quisquam voluptate praesentium tenetur earum repellendus! Dicta
                        culpa consequuntur saepe quibusdam labore, est ex ducimus
                        tempore, quos illum officiis, pariatur ea placeat.
                    </p>
                </div>
            </div>

            <div class="flex items-start my-6 mr-10 font-montserrat">
                <img src='dist/assets/logos/Heart.svg' alt='' class="mr-4 h-7" />
                <div>
                    <h3 class="text-2xl font-semibold">Feature #3</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Quisquam voluptate praesentium tenetur earum repellendus! Dicta
                        culpa consequuntur saepe quibusdam labore, est ex ducimus
                        tempore, quos illum officiis, pariatur ea placeat.
                    </p>
                </div>
            </div>

            <div class="flex items-start my-6 mr-10 font-montserrat">
                <img src='dist/assets/logos/Heart.svg' alt='' class="mr-4 h-7" />
                <div>
                    <h3 class="text-2xl font-semibold">Feature #4</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Quisquam voluptate praesentium tenetur earum repellendus! Dicta
                        culpa consequuntur saepe quibusdam labore, est ex ducimus
                        tempore, quos illum officiis, pariatur ea placeat.
                    </p>
                </div>
            </div>

        </div>
    </section> --}}

    <!-- Pricing -->
    {{-- <section class="py-0 sectionSize bg-[#f4f2ed] h-screen">
        <div>
            <h2 class="secondaryTitle bg-underline4 mb-0 bg-100%">Pricing</h2>
        </div>
        <div class="flex flex-col w-full md:flex-row">

            <div
                class='relative flex flex-col flex-1 px-8 py-5 mx-6 my-8 shadow-2xl bg-[#f4f2ed] h-screen rounded-2xl md:top-24'>
                <h3 class="mb-4 text-2xl font-normal font-pt-serif">
                    The Good
                </h3>
                <div class="mb-4 text-2xl font-bold font-montserrat">
                    $25
                    <span class="text-base font-normal"> / month</span>
                </div>

                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #3</p>
                </div>

                <button class="py-3 mt-4 text-lg border-2 border-black border-solid rounded-xl">
                    Choose plan
                </button>
            </div>

            <div
                class='relative flex flex-col flex-1 px-8 py-5 mx-6 my-8 shadow-2xl bg-[#f4f2ed] h-screen rounded-2xl md:top-12'>
                <h3 class="mb-4 text-2xl font-normal font-pt-serif">
                    The Bad
                </h3>
                <div class="mb-4 text-2xl font-bold font-montserrat">
                    $40
                    <span class="text-base font-normal"> / month</span>
                </div>

                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #3</p>
                </div>

                <button class="py-3 mt-4 text-lg border-2 border-black border-solid rounded-xl">
                    Choose plan
                </button>
            </div>

            <div
                class='relative flex flex-col flex-1 px-8 py-5 mx-6 my-8 shadow-2xl bg-[#f4f2ed] h-screen rounded-2xl md:top-24'>
                <h3 class="mb-4 text-2xl font-normal font-pt-serif">
                    The Ugly
                </h3>
                <div class="mb-4 text-2xl font-bold font-montserrat">
                    $50
                    <span class="text-base font-normal"> / month</span>
                </div>

                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #3</p>
                </div>

                <button class="py-3 mt-4 text-lg border-2 border-black border-solid rounded-xl">
                    Choose plan
                </button>
            </div>

        </div>
    </section> --}}

    <!-- FAQ  -->
    {{-- <section class="items-start pt-8 text-white bg-black sectionSize md:pt-36">
        <div>
            <h2 class="secondaryTitle bg-highlight3 p-10 mb-0 bg-center bg-100%">
                FAQ
            </h2>
        </div>

        <div toggleElement class="w-full py-4">
            <div class="flex items-center justify-between">
                <div question class="mr-auto font-medium font-montserrat">
                    Where can I get this HTML template?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transition-transform transform" />
            </div>
            <div answer class="hidden pb-8 text-sm font-montserrat font-extralight">
                You can download it on Gumroad.com
            </div>
        </div>
        <hr class="w-full bg-white" />

        <div toggleElement class="w-full py-4">
            <div class="flex items-center justify-between">
                <div question class="mr-auto font-medium font-montserrat">
                    Is this HTML template free?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transition-transform transform" />
            </div>
            <div answer class="hidden pb-8 text-sm font-montserrat font-extralight">
                Yes! For you it is free.
            </div>
        </div>
        <hr class="w-full bg-white" />

        <div toggleElement class="w-full py-4">
            <div class="flex items-center justify-between">
                <div question class="mr-auto font-medium font-montserrat">
                    Am I awesome?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transition-transform transform" />
            </div>
            <div answer class="hidden pb-8 text-sm font-montserrat font-extralight">
                Yes! No doubt about it.
            </div>
        </div>
        <hr class="w-full bg-white" />

    </section> --}}

    <!-- Footer -->
    {{-- <section class="bg-black sectionSize">
        <div class="mb-4">
            <img src='dist/assets/Logo_white.svg' alt="Logo" class="h-4" />
        </div>
        <div class="flex mb-8">
            <a href="#">
                <img src='dist/assets/logos/Facebook.svg' alt="Facebook logo" class="mx-4" />
            </a>
            <a href="#">
                <img src='dist/assets/logos/Youtube.svg' alt="Youtube logo" class="mx-4" />
            </a>
            <a href="#">
                <img src='dist/assets/logos/Instagram.svg' alt="Instagram logo" class="mx-4" />
            </a>
            <a href="#">
                <img src='dist/assets/logos/Twitter.svg' alt="Twitter logo" class="mx-4" />
            </a>
        </div>
        <div class="text-sm text-white font-montserrat">
            © 2021 STARTUP. All rights reserved
        </div>
    </section> --}}

    @stack('script')
</body>

</html>
