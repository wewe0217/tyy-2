<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="/fontawesome/js/all.js"></script>

</head>

<body class="w-screen m-0 p-0 relative bg-fixed bg-center bg-cover" style="background-image: url('/img/bg4.jpg')">
{{--loading page--}}
{{--loading page--}}
<div class=" fixed top-0 w-full py-4 px-4" id="nav" style="z-index: 999">
    <div class=" container m-auto">
        <div class="w-full flex text-white">
            <div class="">
                <div class=" inline-block">
                    <p class=""><img src="/img/name.svg" alt="" class="h-12 "></p>
                    <p class="text-lg">Tianyu Yuan Homestay</p>
                </div>
            </div>
            <div class=" flex-grow flex items-end pl-8">
                <div class="">
                    <button type="button" class="text-2xl">關於天玉園</button>
                    <span class="mx-4 border-r h-full border-white"></span>
                    <button type="button" class="text-2xl">職人咖啡</button>
                    <span class="mx-4 border-r h-full border-white"></span>
                    <button type="button" class="text-2xl">客房介紹</button>
                    <span class="mx-4 border-r h-full border-white"></span>
                    <button type="button" class="text-2xl">訂房須知</button>
                </div>
            </div>
            <div class=" flex items-end">
                <div class="">
                    <span class="mr-2 ml-4 border-r h-full border-white"></span>
                    <button type="button" class=" text-xl"><i class="fas fa-phone-volume"></i> 訂房專線:(05)2627-233</button>
                    <span class="mx-2 border-r h-full border-white"></span>
                    <button type="button" class=" text-xl"><i class="fab fa-facebook-square"></i> Facebook</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="p-3 flex flex-col bg-black bg-opacity-90 backdrop-filter backdrop-blur">
    <div class="h-28">
    </div>
    <div class="flex-grow">
        <div class="container m-auto py-4 bg-cover h-full relative">
            <div class="w-full h-full flex flex-row-reverse relative">
                <div class=" w-1/4 h-screen bg-cover " style="background-image: url('/img/bg3.jpg');"></div>
            </div>

        </div>
    </div>
    {{-- <div class=" h-20"></div> --}}
</div>
<div class="h-screen bg-black bg-opacity-80 backdrop-filter backdrop-blur"></div>


{{-- <div class="w-screen h-screen">
<div class=" absolute top-8 w-full" style="z-index: 999">
    <div class="container m-auto flex">
        <div class=" bg-gray-800 p-3">
            <img src="/img/name.svg" alt="" class="h-12 ">
        </div>
        <div class="bg-gray-50 p-4 text-xl text-gray-800 font-semibold flex items-center">
            <a href="" class="">關於天玉園</a>
            <span class="mx-4 border-r h-full border-gray-800"></span>
            <a href="" class="">職人咖啡</a>
            <span class="mx-4 border-r h-full border-gray-800"></span>
            <a href="" class="">客房介紹</a>
            <span class="mx-4 border-r h-full border-gray-800"></span>
            <a href="" class="">訂房須知</a>
        </div>
    </div>
</div>
    <div class=" flex flex-col h-full">
        <div class="w-full flex-grow relative">
            <div class="h-full w-full grid grid-cols-2" >
                <div class=" bg-cover h-full" style="background-image:url('/img/header-left.jpg')">
                    <div class="bg-white opacity-90 backdrop-filter backdrop-blur-lg h-full"></div>
                </div>
                <div class="h-full bg-cover bg-left" style="background-image: url('/img/bg3.jpg')"></div>
            </div>

            <div class="w-full absolute -bottom-1" >
                <svg version="1.1" id="header-cover" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 1920 130" style="enable-background:new 0 0 1920 130;" xml:space="preserve" class="fill-current text-gray-800">
                <style type="text/css">
                    .st0{}
                </style>
                <path class="st0" d="M1920,123.95V52.14c-3.5,13.5-590.5,64.5-795.5,57.5s-485-98-698-109S0,123.95,0,123.95V130h1919.88
                    L1920,123.95z"/>
                </svg>

            </div>
        </div>

        <div class="relative h-32">

        </div>
    </div>
</div> --}}
    @livewireScripts
</body>

</html>
