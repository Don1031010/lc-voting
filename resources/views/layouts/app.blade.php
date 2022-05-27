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
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 border-gray-200 space-x-10">
                    <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 border-gray-200 hover:border-blue">Considering (6)</a></li>
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">in progress (1)</a></li>
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 pb-3 border-gray-200 space-x-10">
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">implemented (10)</a></li>
                    <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">closed (55)</a></li>
                </ul>
            </nav>
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>
