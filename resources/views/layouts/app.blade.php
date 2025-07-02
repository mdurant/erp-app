<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <wireui:scripts />
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @wireUiScripts(['nonce': 'csp-token'])
    @wireUiScripts(['nonce': 'csp-token', 'foo' => true])
</head>
<body class="antialiased">
<div class="min-h-screen bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                @yield('header', __('Dashboard'))
            </h2>
        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>
</div>
@livewireScripts
</body>
</html>
