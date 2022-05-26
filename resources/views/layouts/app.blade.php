<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts Voting</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="#"><img src="{{ asset('img/logo.svg') }}" alt=""></a>

        <div class="flex items-center">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000?d=mp" alt="avatar"
                    class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae aut laudantium explicabo quam et,
            fugiat, alias perspiciatis, eius omnis sapiente vitae eaque! Sit neque nisi provident corrupti illo numquam.
            Architecto deserunt ratione reiciendis, quae illo ab aspernatur error dolor nihil! Doloremque quo velit illo
            repellat labore, nisi voluptates veritatis voluptas at eveniet ducimus eligendi earum consequatur dicta
            autem facere et consectetur impedit quos porro harum? Eos, ea mollitia laborum corrupti doloremque sunt
            impedit ullam ad minus atque ut, dolore repudiandae facere quis quo? Corporis itaque adipisci quas fugiat
            aperiam voluptatem pariatur sint totam sequi soluta. Dolorum hic fugit obcaecati dignissimos.
        </div>
        <div class="w-175">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores labore aspernatur error magnam harum rem
            quo, facilis tenetur eligendi reprehenderit dolores, aliquam nostrum deserunt odio esse velit. Quae natus
            quod iste assumenda laborum est dignissimos qui voluptas! Dolorem dicta quia, pariatur beatae sint,
            voluptatum, soluta culpa iste cum eligendi esse. In eaque quibusdam quos optio eligendi, debitis soluta!
            Iusto deserunt laborum a aliquam aspernatur, cum reiciendis cupiditate minima sint eveniet quis molestiae
            perferendis quo est assumenda. Corporis neque autem ad. Asperiores reiciendis distinctio itaque culpa
            similique earum, exercitationem commodi, ab labore fugiat magnam quisquam tempore consectetur mollitia quod
            reprehenderit ex.

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore temporibus ab in nemo ipsam fugiat maxime,
            consectetur deleniti iste tempore molestias sapiente excepturi natus reiciendis non culpa? Dolor impedit
            iste et itaque dignissimos dolores, quod pariatur enim? Nemo ut consectetur exercitationem totam officiis
            ad, aut illum necessitatibus provident quia nulla porro? Saepe, culpa. Quasi adipisci laboriosam aliquid
            quae illum aut quidem quo dolorem fugit incidunt, quibusdam exercitationem quod minima, provident soluta
            iure, corrupti rerum temporibus! Architecto, quibusdam. Illum perferendis tenetur dolore, aliquid facere
            expedita adipisci aspernatur natus, ipsum ratione quisquam quibusdam autem eligendi, esse veniam maxime
            sequi. Eveniet, beatae minima.
        </div>
    </main>
</body>

</html>
