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

<body class="w-screen m-0 p-0 relative bg-cover" style="background-image: url('img/bg5.jpg')">
    <div class=" bg-white bg-opacity-70">
        {{--loading page--}}
        {{--loading page--}}
        {{-- nav --}}
        <div class=" fixed top-0 w-full py-2 px-4 hidden lg:block" id="nav" style="z-index: 999;background-color: #e8f4d9d0">
            {{-- <div class=" fixed top-0 w-full py-2 px-4 bg-gray-100 bg-opacity-80 hidden lg:block" id="nav" style="z-index: 999;"> --}}
            <div class=" container m-auto">
            <div class="w-full flex text-gray-800">
                <div class="">
                    <div class=" inline-block">
                        <p class="">
                            <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 610.14 279.93"
                                style="enable-background:new 0 0 610.14 279.93;" xml:space="preserve"
                                class=" fill-current h-8">
                                <g>
                                    <g>
                                        <g>
                                            <path class=""
                                                d="M122.17,30.85c4.9,0,12.24,1.95,22.04,5.85c8.46,3.04,12.69,6.71,12.69,11.04c0,1.93-0.66,4.35-1.99,7.24
                                            c-2.21,4.83-3.31,13.52-3.31,26.07c0,28.01-4.96,53.28-14.86,75.83c-8.49,21.86-21.24,41.67-38.22,59.43
                                            c-15.57,16.4-34.68,29.72-57.33,39.96c-19.81,8.2-32.55,12.3-38.21,12.3c-1.99,0-2.98-0.77-2.98-2.32c0-0.69,2.39-2.4,7.19-5.15
                                            c28.75-16.47,51.51-33.61,68.27-51.44c19.16-19.21,32.34-40.47,39.53-63.79c7.19-21.26,10.78-42.87,10.78-64.82
                                            c0-14.9-1.6-25.33-4.8-31.29c-3.2-4.47-4.8-8.56-4.8-12.29C116.16,33.06,118.16,30.85,122.17,30.85z M249.07,91.2
                                            c10.57,6.62,15.86,11.67,15.86,15.14c-0.32,3.47-5.29,5.37-14.9,5.68c-29.05,0.76-62.24,3.24-99.58,7.42
                                            c-21.13,2.28-49.04,6.66-83.74,13.13c-6.79,1.52-10.94,2.28-12.45,2.28c-6.6,0-13.2-1.75-19.8-5.24
                                            c-7.86-3.17-11.79-6.19-11.79-9.05c0-1.27,2.96-2.54,8.87-3.81c70.01-9.01,127.47-17.48,172.4-25.41
                                            c15.72-3.24,25.65-4.87,29.76-4.87C235.3,86.47,240.43,88.05,249.07,91.2z M217.48,6.14c5.38,2.34,8.08,5.26,8.08,8.76
                                            c0,2.72-3.19,4.85-9.56,6.4c-7.39,2.72-23.84,6.21-49.34,10.48c-38.61,5.82-63.78,8.72-75.52,8.72
                                            c-12.03,0-20.39-1.35-25.08-4.05c-4.7-3.29-7.05-6.14-7.05-8.54c0-2.23,4.66-3.53,13.97-3.91c21.96-2.23,46.08-5.95,72.37-11.17
                                            c18.29-3.35,33.1-6.88,44.41-10.61c3.99-1.49,6.66-2.23,7.99-2.23C202.83,0,209.4,2.05,217.48,6.14z M153.97,118.43
                                            c30.37,43.86,59.21,75.48,86.54,94.87c12.15,9.23,25.2,17.08,39.17,23.54l29.15,13.85c9.08,3.54,13.63,6.44,13.63,8.7
                                            c0,2.58-2.5,4.03-7.48,4.35c-11.64,3.22-29.38,4.83-53.22,4.83c-14.41,0-24.67-3.36-30.76-10.08
                                            c-9.98-11.2-20.23-24.42-30.76-39.66c-14.41-19.27-28.55-42.13-42.4-68.57c-7.76-15.24-13.58-25.32-17.46-30.25
                                            c-2.78-4.03-4.16-6.49-4.16-7.39c0.65-3.97,2.92-5.96,6.81-5.96C146.68,107.12,150.33,111.04,153.97,118.43z" />
                                        </g>
                                        <g>
                                            <path class="st0"
                                                d="M440.04,199.83c5.97,3.27,8.96,6.23,8.96,8.88c0,2.34-4.13,3.51-12.37,3.51
                                            c-11.51-0.29-23.92-0.44-37.21-0.44c-13.89,0-32.05,0.7-54.47,2.1c-16.07,0.7-33.24,2.71-51.49,6.04
                                            c-5.16,1.05-8.34,1.58-9.53,1.58c-2.68,0-6.7-1.17-12.05-3.49c-5.67-2.49-8.5-4.51-8.5-6.06c0-1.86,1.84-2.95,5.52-3.26
                                            c20.28-0.17,35.14-1.01,44.59-2.51c17.92-1.84,37.61-3.26,59.06-4.27c20.28-1.51,35.83-3.18,46.66-5.03
                                            c4.53-0.67,7.38-1.01,8.57-1.01C428.88,195.86,432.97,197.18,440.04,199.83z M401.52,78.87c3.37,1.46,5.05,3.29,5.05,5.48
                                            c0,1.48-2.14,2.65-6.43,3.5c-4.96,1.49-16.02,3.39-33.18,5.73c-25.96,3.18-42.88,4.77-50.78,4.77c-7.53,0-12.75-0.84-15.69-2.53
                                            c-2.94-2.06-4.41-3.84-4.41-5.34c0-1.24,3.12-1.96,9.37-2.16c14.73-1.24,30.92-3.29,48.55-6.18c12.28-1.85,22.21-3.81,29.8-5.87
                                            c2.68-0.82,4.46-1.24,5.36-1.24C392.35,75.03,396.46,76.32,401.52,78.87z M399.2,139c3.14,1.37,4.72,3.07,4.72,5.12
                                            c0,1.12-1.97,1.99-5.9,2.63c-4.56,1.12-14.7,2.55-30.43,4.31c-23.8,2.39-39.33,3.59-46.57,3.59c-7.02,0-11.91-0.79-14.64-2.36
                                            c-2.74-1.92-4.11-3.58-4.11-4.99c0-0.95,2.87-1.51,8.6-1.66c13.52-0.95,28.37-2.53,44.55-4.75c11.26-1.42,20.38-2.93,27.34-4.51
                                            c2.46-0.63,4.09-0.95,4.92-0.95C390.64,135.42,394.48,136.61,399.2,139z M357.54,96.12c4.62,2.03,6.93,4.83,6.93,8.38
                                            c0,0.31-0.83,1.71-2.48,4.2c-0.83,1.56-2.06,8.71-3.71,21.46l-0.14,76.29h-12.96l-1.41-79c0-5.98-0.61-12.43-1.82-19.36
                                            c-0.17-3.3-1.13-5.98-2.86-8.03c-1.39-1.73-2.08-2.83-2.08-3.3c0-3.48,1.88-5.22,5.65-5.22
                                            C346.77,91.55,351.73,93.08,357.54,96.12z M404.42,160.26c7.38,2.04,12.91,4.28,16.6,6.71c3.25,2.85,4.88,6.71,4.88,11.6
                                            c0,5.64-2.32,8.45-6.96,8.45c-1.94,0-4.01-0.92-6.19-2.77c-4.13-3.32-9.96-10.33-17.49-21.04c-0.97-1.1-1.46-1.94-1.46-2.49
                                            c0.32-1.33,1.04-1.99,2.15-1.99C398.56,158.73,401.39,159.24,404.42,160.26z" />
                                        </g>
                                        <g>
                                            <path class="st0" d="M470.18,107.25c2.62,1.74,3.94,4.43,3.94,8.07c-1.34,86.68-3.06,136.16-5.14,148.45
                                            c-0.89,6.64-2.46,9.97-4.69,9.97c-1.92,0-3.85-1.76-5.77-5.26c-2.62-4.39-3.93-8.86-3.93-13.42c0-3.31,0.44-6.28,1.31-8.93
                                            c1.89-7.6,3.42-18.68,4.59-33.23c1.31-13.88,1.96-37.27,1.96-70.17c0-14.21-1.44-24.3-4.31-30.25c-1.08-2.15-1.62-3.72-1.62-4.71
                                            c0-1.91,1.31-2.87,3.94-2.87C464.32,104.91,467.55,105.69,470.18,107.25z M603.89,101.88c4.16,2.95,6.25,5.3,6.25,7.07
                                            c0,1.32-0.59,2.92-1.78,4.82c-1.93,5.27-2.89,15.21-2.89,29.83c0,33.07,0.54,57.9,1.63,74.51c0.47,12.08,0.7,25.14,0.7,39.18
                                            c0,5.91-1.56,11.24-4.68,15.97c-3.11,4.43-6.08,6.65-8.9,6.65l-6.46-25.26c1.39,0,2.37-1.76,2.93-5.28
                                            c1.11-6.59,1.67-25.11,1.67-55.56c0-23.83-0.87-46.86-2.6-69.08c-0.72-8.33-2.02-13.67-3.9-16.01c-1.59-1.17-3.97-1.75-7.15-1.75
                                            c-14.28,0-29.24,0.88-44.87,2.65c-20.89,2.06-36.18,3.89-45.88,5.51c-5.12,0.88-9.3,1.32-12.53,1.32c-2.04,0-4.67-0.96-7.87-2.87
                                            c-2.77-1.76-4.16-3.38-4.16-4.85c0-1.18,1.16-1.77,3.48-1.77c32.18-1.77,63.41-4.27,93.68-7.51c6.41-0.59,12.34-1.62,17.79-3.09
                                            c4.64-1.18,7.57-1.77,8.8-1.77C590.87,94.59,596.45,97.02,603.89,101.88z M587.34,251.92c3.41,2.29,5.12,4.2,5.12,5.74
                                            c0,1.3-1.71,1.96-5.12,1.96c-13.65,0-26.17,0.44-37.54,1.3l-52.89,2.94c-9.67,0.65-17.06,0.98-22.18,0.98
                                            c-4.03,0-6.78-0.74-8.24-2.2c-1.47-1.47-2.2-2.85-2.2-4.13c0-1.84,1.16-2.76,3.48-2.76c29.23-0.93,56.46-2.68,81.71-5.24
                                            c13.95-1.16,23.25-1.75,27.9-1.75C579.65,248.77,582.97,249.82,587.34,251.92z M528.19,195.07c2.19,1.63,3.29,3.33,3.29,5.09
                                            c0,0.65-0.7,1.35-2.1,2.09c-1.2,1.02-2.2,2.04-3,3.07c-2.6,2.6-5.5,5.39-8.7,8.37c-4.8,3.72-9.7,6.93-14.7,9.62
                                            c-4.8,2.33-9.41,4.14-13.8,5.44c-4,1.12-6.4,1.67-7.2,1.67c-1.22,0-1.82-0.25-1.82-0.76c5.75-3.36,10.07-6.23,12.94-8.6
                                            c6.64-4.64,12.28-9.24,16.92-13.79c3.98-3.95,6.64-7.11,7.96-9.49c1.1-1.28,1.66-2.57,1.66-3.85c0-1.01,0.58-1.52,1.75-1.52
                                            C523.87,192.42,526.14,193.31,528.19,195.07z M572.41,147.31c4.52,2.84,6.79,5,6.79,6.48c-0.14,1.48-2.27,2.3-6.38,2.43
                                            c-11.74,0.31-25.15,1.3-40.24,2.98c-8.54,0.92-19.81,2.68-33.83,5.28c-2.75,0.61-4.42,0.92-5.03,0.92
                                            c-2.83,0-5.65-0.75-8.48-2.24c-3.36-1.36-5.04-2.65-5.04-3.87c0-0.54,1.26-1.08,3.8-1.63c28.34-3.68,51.6-7.14,69.79-10.39
                                            c6.36-1.33,10.38-1.99,12.05-1.99C566.51,145.28,568.71,145.96,572.41,147.31z M505.7,173.05c3.7,1.29,5.55,2.85,5.55,4.67
                                            c0,1.04,0.11,2.13,0.35,3.26c1.46,6.92,2.2,11.69,2.2,14.31c0,1.78-0.27,3.19-0.8,4.24c-0.54,1.15-1.18,1.73-1.93,1.73
                                            c-0.86,0-1.72-0.69-2.58-2.08c-1.29-1.81-1.99-3.73-2.09-5.76l-1.7-6.77c-0.66-3.52-1.37-5.99-2.12-7.4
                                            c-0.47-1.46-1.7-2.8-3.67-4.02c-0.75-0.33-1.13-0.56-1.13-0.7c0-1.62,0.69-2.43,2.06-2.43C502.05,172.09,504,172.41,505.7,173.05
                                            z M556.72,126.83c2.02,0.88,3.03,1.98,3.03,3.29c0,1.06-1.18,1.89-3.55,2.5c-2.74,1.06-8.83,2.42-18.28,4.09
                                            c-14.31,2.27-23.64,3.4-27.99,3.4c-4.52,0-7.65-0.5-9.42-1.52c-1.76-1.24-2.64-2.3-2.64-3.2c0-0.87,1.73-1.37,5.18-1.52
                                            c8.14-0.87,17.08-2.31,26.83-4.34c6.78-1.3,12.27-2.68,16.47-4.12c1.48-0.58,2.46-0.87,2.96-0.87
                                            C551.22,124.52,553.69,125.29,556.72,126.83z M553.82,167.63c4.47,2.87,6.71,5.08,6.71,6.63c0,0.65-0.49,1.3-1.48,1.95
                                            c-3.21,2.49-5.55,5.13-7.03,7.94l-3.14,4.87c-1.36,2.27-3.33,3.4-5.92,3.4c-2.98,0-4.47-0.83-4.47-2.49
                                            c0-0.32,0.2-0.96,0.61-1.92c0.41-1.6,1.02-4.21,1.84-7.84c0.54-2.78,0.82-4.54,0.82-5.29c0-1.66-1.66-2.49-4.97-2.49
                                            c-1.97,0-5.04,0.45-9.23,1.35c-4.8,0.91-9.41,2.26-13.84,4.06c-0.86,0.54-1.6,0.81-2.21,0.81c-1.96,0-3.81-0.66-5.55-1.98
                                            c-1.85-1.1-2.78-1.98-2.78-2.63c0-0.99,0.87-1.48,2.61-1.48c2.52-0.15,5.11-0.55,7.76-1.17c5.77-1.25,14.13-2.89,25.08-4.93
                                            c1.68-0.31,3.31-0.86,4.87-1.64c0.96-0.31,1.62-0.47,1.99-0.47C546.81,164.31,549.59,165.42,553.82,167.63z M513.5,215.54
                                            c2.36,1.5,3.6,3,3.71,4.5c0.01,0.4,0.02,0.9,0.04,1.5c0.04,1.61,0.06,5.97,0.07,13.08c0,1.47,0.37,2.21,1.1,2.21
                                            c0.72,0,4.97-1.56,12.76-4.67c1.3-0.42,2.05-0.63,2.27-0.63c0.44,0,0.66,0.22,0.66,0.66c0,0.66-0.58,1.51-1.74,2.54
                                            c-8.61,7.72-14.16,12.85-16.65,15.39c-1.41,1.6-2.61,2.4-3.6,2.4c-1.4,0-2.56-0.81-3.49-2.43c-1.28-2.54-1.92-4.57-1.92-6.08
                                            c0-0.4,0.15-0.86,0.45-1.36c0.21-0.5,0.36-1.51,0.45-3.03c0.21-2.23,0.32-5.91,0.32-11.07c-0.12-4.33-0.73-7.6-1.82-9.83
                                            c-0.73-1.17-1.15-2.22-1.27-3.16c0-1.28,0.83-1.93,2.48-1.93C509.44,213.63,511.5,214.27,513.5,215.54z M547.77,189.48
                                            c2.68,1.8,4.03,3.31,4.03,4.51c0,0.53-0.5,0.8-1.49,0.8c-3.97,0-7.61,0.18-10.91,0.53l-15.38,1.2c-2.81,0.27-4.96,0.4-6.45,0.4
                                            c-3.17,0-5.33-0.58-6.48-1.73c-1.15-1.15-1.73-2.24-1.73-3.25c0-1.44,0.91-2.17,2.73-2.17c7.42-0.37,14.34-1.06,20.76-2.08
                                            c3.54-0.46,5.91-0.69,7.09-0.69C541.74,187,544.34,187.83,547.77,189.48z M529.93,113.32c2.64,1.35,3.97,2.83,3.97,4.44
                                            c0,1.08-0.2,2.23-0.59,3.44c-0.53,2.42-0.79,4.44-0.79,6.06l-1.8,28.92h-9.53l-1.24-33.06c-0.13-1.87-0.78-3.87-1.95-6.01
                                            c-0.91-1.07-1.36-1.87-1.36-2.4c0-2.4,1.26-3.6,3.77-3.6C522.92,111.1,526.09,111.84,529.93,113.32z M533.72,212.07
                                            c5.51,2.17,10.88,4.71,16.11,7.6c6.88,4.34,11.43,8.33,13.63,11.95c1.65,3.14,2.48,6.64,2.48,10.5c0,0.89-0.22,1.89-0.66,3
                                            c-0.52,0.81-1.18,1.22-1.99,1.22c-1,0-2.49-0.68-4.48-2.06c-3.32-1.96-7.47-6.08-12.45-12.35c-6.64-7.84-11.62-13.13-14.94-15.88
                                            c-2.66-1.96-3.98-3.43-3.98-4.41c0-0.44,0.17-0.66,0.5-0.66C529.03,210.98,530.96,211.34,533.72,212.07z M555.42,196.84
                                            c1.18,0,3.39,1.11,6.63,3.32c3.54,2.8,5.3,4.72,5.3,5.76c0,0.88-0.65,1.62-1.95,2.21c-4.71,2.8-12.18,6.48-22.42,11.04
                                            c-0.97,0.44-1.87,0.66-2.68,0.66c-0.41,0-0.62-0.29-0.62-0.87c0-0.15,0.27-0.44,0.8-0.88c3.02-3.39,5.6-6.63,7.73-9.73
                                            c2.85-3.83,4.8-7.15,5.87-9.95C554.44,197.36,554.88,196.84,555.42,196.84z M585.01,254.25c1.37,0.28,2.29,0.42,2.75,0.42
                                            l6.46,25.26c-1.18,0-2.24-1.11-3.19-3.34c-2.13-5.65-4.84-11.55-8.14-17.71c-1.54-2.05-2.3-3.34-2.3-3.85
                                            c0-1.07,0.42-1.61,1.26-1.61C582.58,253.41,583.64,253.69,585.01,254.25z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </p>
                        {{-- <p class="text-lg">Tianyu Yuan Homestay</p> --}}
                    </div>
                </div>
                <div class=" flex-grow flex items-end pl-8">
                    <div class="">
                        <button type="button" class="text-xl">關於天玉園</button>
                        <span class="mx-4 border-r h-full border-gray-800"></span>
                        <button type="button" class="text-xl">職人咖啡</button>
                        <span class="mx-4 border-r h-full border-gray-800"></span>
                        <button type="button" class="text-xl">客房介紹</button>
                        <span class="mx-4 border-r h-full border-gray-800"></span>
                        <button type="button" class="text-xl">訂房須知</button>
                    </div>
                </div>
                <div class=" flex items-end">
                    <div class="">
                        <span class="mr-2 ml-4 border-r h-full border-gray-800"></span>
                        <button type="button" class=" text-lg"><i class="fas fa-phone-volume"></i>
                            訂房專線:(05)2627-233</button>
                        <span class="mx-2 border-r h-full border-gray-800"></span>
                        <button type="button" class=" text-lg"><i class="fab fa-facebook-square"></i>
                            Facebook</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- nav --}}
    <div class="w-screen h-screen pt-20" id="header">
        <div class="container m-auto h-full  lg:h-4/5 relative">
            <div class="h-full w-full absolute flex justify-center items-center lg:px-20 px-8">
                <div class="h-full w-full border border-yellow-900 lg:-mr-12 lg:-mb-12 -mr-4 -mb-4"></div>
            </div>
            <div class="h-full w-full absolute flex justify-center items-center lg:px-20 px-8">
                <div class="h-full w-full bg-cover bg-center shadow" style="background-image: url('/img/bg3.jpg')">
                </div>
            </div>
        </div>
    </div>
    <div class="  mt-10 lg:-mt-20 relative">
        <div class=" container m-auto flex lg:flex-none flex-wrap justify-center lg:grid lg:grid-cols-3 lg:grid-rows-2 lg:gap-3 px-4">
            <div class="lg:col-span-1 w-full lg:w-auto">
                <img src="/img/bg2.jpg" alt="" class="">
            </div>
            <div class="w-full lg:w-auto lg:col-span-2 bg-opacity-50 bg-white p-8 mb-2 lg:mb-0">
                <p class=" text-xl text-gray-600 font-semibold px-2 border-l border-gray-400 mb-4">
                    關於天玉園 <span class="text-lg text-gray-500 font-normal">-地緣故事</span>
                </p>
                <p class="">
                    <span class="text-2xl text-green-500">因</span> 緣際會發現「梅山」是農特產與人情味兼具的純樸山城
                </p>
                <p class="">
                    地標北緯23.5°，氣候宜人，舉凡咖啡、茶、竹筍、水果、檳榔等等蔬果產季幾乎常年不斷
                </p>
                <p class="mt-4">
                    2014年夫妻倆毅然決然將人生的下半場全心全力投入此地
                    以將近七年的時間從無到有、上山下海尋覓體驗，結合我們在北部多年經營地方創生的精神
                    打造出距離梅山市區最近、以莊園咖啡為主題的「天玉園景觀休閒渡假民宿」
                </p>
                <p class="">

                </p>
            </div>
            <div class="w-1/2 lg:w-auto h-28 lg:h-auto pr-1 lg:pr-0" >
                <button type="button" class="w-full h-full block bg-cover bg-bottom" style="background-image: url('/img/about/homestay.jpg">
                    <div class="h-full w-full bg-gray-900 bg-opacity-80 justify-center items-center hidden lg:flex opacity-0 hover:opacity-100 transition duration-500 ease-in-out">
                        <div class=" text-white text-xl text-center">
                            <p class="text-2xl mb-4">好客民宿</p>
                            <p class="">2021年</p>
                            <p class="">交通部觀光局評選為「好客民宿」</p>
                        </div>
                    </div>
                </button>
            </div>
            <div class="w-1/2 lg:w-auto  h-28 lg:h-auto pl-1 lg:pl-0" >
                <button type="button" class="w-full h-full block bg-cover bg-bottom" style="background-image: url('/img/coffee/coffee-bg.jpg')">
                    <div class="h-full w-full bg-gray-900 bg-opacity-80 justify-center items-center hidden lg:flex opacity-0 hover:opacity-100 transition duration-500 ease-in-out">
                        <div class=" text-white text-xl text-center">
                            <p class="text-2xl mb-4">天玉園優豆品牌</p>
                            <p class="">英國City&Guilds</p>
                            <p class="">國際咖啡師/咖啡烘焙師雙認證</p>
                        </div>
                    </div>
                </button>
            </div>
            <div class="w-full lg:w-auto bg-cover bg-bottom h-32 lg:h-auto mt-2 lg:mt-0" style="background-image: url('/img/bg3.jpg')">
                <button type="button" class="w-full h-full block">
                    <div class="h-full w-full bg-gray-900 bg-opacity-80 justify-center items-center flex opacity-0 hover:opacity-100 transition duration-500 ease-in-out">
                        <div class=" text-white text-xl text-center">
                            <p class="text-2xl mb-4">慢活輕旅行</p>
                            <p class="">800多坪的綠化園區與休憩涼亭</p>
                            <p class="">觀瀑、品花、賞魚</p>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="mt-20 ">
        <div class="container m-auto relative">
            <div class="bg-white absolute -top-36 rounded -left-20" style=" height: 70vh;width: 50vw;z-index:-10"></div>
            <div class="w-full flex">
                <div class="w-2/3 border border-yellow-900 h-96 relative">
                    <div class="w-full h-full absolute -bottom-4 -right-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14627.562534396702!2d120.55421369667815!3d23.572371093942284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ec0c13e1cc6f7%3A0x7a5cc5c30dca869!2z5aSp546J5ZyS5pmv6KeA5rih5YGH5LyR6ZaS5rCR5a6_!5e0!3m2!1szh-TW!2stw!4v1627009660607!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy" class="w-full h-full shadow"></iframe>
                    </div>
                </div>
                <div class="w-1/3">
                    <div class="py-8 pl-8 text-gray-600">
                        <p class=" text-xl font-semibold border-l border-gray-400 mb-4 px-2">
                            交通資訊 <span class="text-lg text-gray-500 font-normal">-旅行足跡</span>
                        </p>
                        <p class="text-xl font-semibold">
                            <span class="text-yellow-600">壹、</span>大眾運輸:
                        </p>
                        <div class="pl-4">
                            <p class="text-lg mt-2  font-semibold">
                                高鐵雲林站BRT(斗六後火車站)->台西客運(梅山果菜市場)<br>->步行約15分鐘<br>(共約120分鐘)
                            </p>
                            <p class="text-lg mt-2  font-semibold">
                                嘉義火車站->嘉義縣公車 7323(南梅山站)->步行約6分鐘 (共約70分鐘)
                            </p>
                        </div>

                        <div class="h-2"></div>
                        <p class="text-xl font-semibold">
                            <span class="text-yellow-600">貳、</span>自行前往:
                        </p>
                        <p class="text-lg mt-2  font-semibold pl-4">
                            國道3號->梅山出口下交流道(往梅山方向)->縣道162->台三線270處
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-20"></div>
    <div class="h-screen">
        <div class="container m-auto">
            <p class=" text-xl text-gray-600 font-semibold  mb-4 text-center">
                <span class="border-r border-gray-400 mr-2"></span>
                職人咖啡<span class="text-lg text-gray-500 font-normal">-City&Guilds 國際咖啡師/咖啡烘焙師雙認證</span>
            </p>
            <div class="h-20"></div>
            <div class="relative">
                <div class="w-1/3 h-96 border border-yellow-900 absolute -top-16 left-16"></div>
                <div class=" absolute w-1/3 -top-10 left-10">
                    <img src="/img/coffee/coffee-6.jpg" alt="" class="w-full">
                    <div class="w-full h-full bg-gray-600 absolute top-0 bg-opacity-30 backdrop-filter backdrop-grayscale"></div>
                </div>

                <div class="flex">
                    <div class=" flex-grow"></div>
                    <div class=" w-2/3 bg-white relative rounded bg-opacity-90">
                        <div class="w-full flex h-full">
                            <div class="flex-grow h-full p-8 text-gray-600">
                                <p class=" text-xl font-semibold border-l border-gray-400 mb-4 px-2">
                                    咖啡總監 <span class="text-lg text-gray-500 font-normal">-Jerzenchen</span>
                                </p>
                                <p class="text-lg mt-2  font-semibold pl-4">
                                    2018年6月獲得“國際咖啡師”
                                </p>
                                <p class="text-lg mt-2  font-semibold pl-4">
                                    英國City&Guilds“國際咖啡烘豆師”
                                </p>
                                <p class=" mt-2  pl-4">
                                    <span class="text-2xl text-green-500">堅</span> 持手工挑揀生豆以維持最高品質，細心烘焙為求展現各式單品咖啡豆最佳風味與餘韻
                                </p>

                                <div class="h-8"></div>
                                <p class=" text-xl font-semibold border-l border-gray-400 mb-4 px-2">
                                    單品莊園咖啡 <span class="text-lg text-gray-500 font-normal">-咖啡豆&耳掛咖啡包</span>
                                </p>
                                <p class="text-lg mt-2  font-semibold pl-4">
                                    巴西、坦尚尼亞圓豆、瓜地馬拉經典焦糖等
                                </p>
                                <div class="grid grid-cols-2 gap-2 p-8">
                                    <img src="/img/coffee/coffee-3.jpg" alt="" class="">
                                    <img src="/img/coffee/coffee-5.jpg" alt="" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>


    @livewireScripts
</body>

</html>
