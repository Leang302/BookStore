<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    {{-- navbar --}}
    <div class="w-[100%] bg-black py-3 p-3">

        <div class="container mx-auto flex justify-between items-center sm:w-[100%] ">
            {{-- drawer --}}
            <div class="drawer lg:hidden z-10">
                <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <!-- Page content here -->
                    <label for="my-drawer-4" class="drawer-button"><i class="fa fa-bars text-white"
                            aria-hidden="true"></i></label>
                </div>
                <div class="drawer-side">
                    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                        <!-- Sidebar content here -->
                        <li><a>Sidebar Item 1</a></li>
                        <li><a>Sidebar Item 2</a></li>
                    </ul>
                </div>
            </div>
            {{-- logo --}}
            <p class="text-white">Logo</p>
            {{-- nav item --}}
            <div class="hidden lg:block">
                <ul class="menu menu-horizontal gap-4 flex">
                    <li class="rounded hover:bg-yellow-400 p-4 {{ request()->is('/') ? 'active' : '' }}">
                        <a class="flex justify-center items-center px-3 py-0 text-white" href="/">Home
                        </a>
                    </li>
                    <li class="rounded hover:bg-yellow-400 p-4 {{ request()->is('aboutUs') ? 'active' : '' }}">
                        <a class="flex justify-center items-center px-3 py-0 text-white"
                            href="{{ route('nav.aboutUs') }}">About us
                        </a>
                    </li>
                    <li class="rounded hover:bg-yellow-400 p-4 {{ request()->is('aboutUs') ? 'active' : '' }}">


                    </li>
                    <li class="rounded hover:bg-yellow-400 p-4 {{ request()->is('contactUs') ? 'active' : '' }}">
                        <a class="flex justify-center items-center px-3 py-0 text-white"
                            href="{{ route('nav.contactUs') }}">Contact Us</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    {{-- slide --}}
    <div class="container grid grid-cols-4 mx-auto gap-x-2 mt-2 z-1">
        <div class='col-span-4 lg:col-span-3 h-[500px]'>
            <div class="slider h-full flex flex-col">
                {{-- image slide --}}
                <img src={{ asset('assets/img/pic1.jpg') }} class='flex-1 object-contain' />
                <img src={{ asset('assets/img/pic2.jpg') }} class='flex-1 object-contain' />
            </div>
        </div>
        <div class='hidden lg:block bg-black'>2</div>
    </div>

    {{-- catagory product --}}


    {{-- script link --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>
