<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    @include('partials.head')
</head>

<body class="container dark:bg-gray-900 bg-white dark:text-gray-50 text-gray-900">
    <x-listing-flash />
    <header>
        @include('partials.header')
    </header>

    <main class="min-h-screen">
        {{$slot}}
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>
