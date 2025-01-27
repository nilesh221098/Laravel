<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="antialiased bg-gray-100">

    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="space-y-6 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Home</h1>
            <div class="space-x-4">
                <a href="cities" class="inline-block px-6 py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    All City
                </a>

                <a href="pages/create" class="inline-block px-6 py-3 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 transition">
                    Create Pages
                </a>

                <a href="pages" class="inline-block px-6 py-3 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 transition">
                    Show Pages List
                </a>
            </div>
        </div>
    </div>

</body>
</html>
