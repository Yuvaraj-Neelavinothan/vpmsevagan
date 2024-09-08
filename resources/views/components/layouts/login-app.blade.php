<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- flowbite --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>{{ $title ?? 'vpmsevagan' }}</title>
    @vite('resources/js/app.js')
    @livewireStyles
    <style>
        /* Default font sizes */
        .title-1 {
            font-size: 2rem;
            /* Equivalent to 32px */
        }

        .title-2 {
            font-size: 1.5rem;
            /* Equivalent to 24px */
        }

        /* Media query for small screens (up to 640px) */
        @media (max-width: 640px) {
            .title-1 {
                font-size: 1rem;
                /* Equivalent to 16px */
            }

            .title-2 {
                font-size: .75rem;
                /* Equivalent to 12px */
            }
        }

        /* Media query for medium screens (between 641px and 768px) - optional */
        @media (min-width: 641px) and (max-width: 768px) {
            .title-1 {
                font-size: 1.25rem;
                /* Equivalent to 20px */
            }

            .title-2 {
                font-size: 1rem;
                /* Equivalent to 16px */
            }
        }

        /* Media query for large screens (between 769px and 1024px) - optional */
        @media (min-width: 769px) and (max-width: 1024px) {
            .title-1 {
                font-size: 1.5rem;
                /* Equivalent to 24px */
            }

            .title-2 {
                font-size: 1.25rem;
                /* Equivalent to 20px */
            }
        }
    </style>
    @stack('styles')
</head>

<body>
    <main class="">

        {{-- contant of side menu --}}
        @yield('contant')
    </main>
    </div>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    {{-- flowbite --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    @stack('scripts')
    @livewireScripts
</body>

</html>
