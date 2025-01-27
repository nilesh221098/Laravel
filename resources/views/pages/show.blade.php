<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg p-8">
            <h1 class="text-3xl font-semibold text-gray-800 mb-4">
                {{ $page->name }} <span class="text-blue-500 capitalize">{{ ucfirst($page->city->name) }}</span>
            </h1>

            <p class="text-lg text-gray-700 mb-6">
                <strong class="text-gray-900">Description:</strong> {{ $page->description }}
            </p>

            <div class="flex justify-between items-center">
                <a href="/" class="text-blue-600 hover:text-blue-800">Back to Home</a>
                <span class="text-sm text-gray-500">{{ now()->format('F j, Y') }}</span>
            </div>
        </div>
    </div>

</body>
</html>
