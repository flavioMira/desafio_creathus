<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
       

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg viewBox="0 0 230 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                    <g clip-path="url(#clip0)" fill="#EF3B2D">
                        <path class="st0" d="M0,87.8c0-13.1,0-25.4,0-38.2c16.2-0.5,25.3-12,34.8-22.7c12-13.5,26.1-23.4,44.3-26
                            c24.3-3.4,45.9,2.4,63.5,20.5c2.7,2.7,2.9,4.4-0.1,7.2c-8.1,7.8-15.9,16-24.2,24.4c-5.8-7.6-12.6-12.5-21.7-14
                            c-10.5-1.7-19.5,1-27.1,8.2C61.5,54.6,54.2,62.6,46,69.7c-11.8,10.1-25,17.7-41.2,18.2C3.3,87.9,1.8,87.8,0,87.8z" />
                        <path class="st0" d="M63.7,86.9c4.4,3.7,7.7,7.4,11.8,9.7c13.4,7.8,28.8,5.3,39.6-6c10.9-11.4,22.2-22.5,35.8-30.7
                            c9.6-5.8,20.1-8.3,31.6-8.4c0,13,0,25.5,0,38.4c-12.7,0.5-21.1,8.1-29.2,16.6c-6.2,6.5-12.3,13.1-19.1,18.9
                            c-8.9,7.7-19.8,11.8-31.3,13.4c-24,3.3-45.2-2.9-62.6-20.3c-3.1-3.1-2.9-5.1,0.2-8.1C48.5,102.7,56.2,94.6,63.7,86.9z" />
                    </g>
                </svg>

                <h1 class="flex mt-2 fs-1 text-gray-600 dark:text-gray-400">
                    FILMES
                </h1>
                <span class="flex mt-2 fs-3 text-gray-600 dark:text-gray-400 ms-3"> |&nbsp;&nbsp;@yield('title')</span>
            </div>

            <div class="mt-8  dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            @yield('content')    
            

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Site desenvolvido com Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>