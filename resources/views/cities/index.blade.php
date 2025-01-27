{{--<h1>Cities List</h1>
<a href="{{ route('cities.create') }}">Add City</a> <br><br>
<a href="pages/create" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Create Pages</a>
<br><br>
<a href="pages" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">Show Pages List</a>
<ul>
    @foreach($cities as $city)
        <li>{{ ucfirst($city->name) }}</li>
    @endforeach
</ul>--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg p-8">

            <!-- Heading -->
               <div class="flex justify-between items-center">
                <h1 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Cities List</h1>
         
                <a href="/" class="text-blue-600 hover:text-blue-800">Back to Home</a>
            </div>

            <!-- Buttons for actions -->
            <div class="flex space-x-4 justify-center mb-6">
                <a href="{{ route('cities.create') }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    Add City
                </a>
                <a href="pages/create" class="inline-block px-6 py-3 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 transition">
                    Create Pages
                </a>
                <a href="pages" class="inline-block px-6 py-3 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 transition">
                    Show Pages List
                </a>
            </div>

            <!-- List of Cities -->
            <ul class="space-y-4">
                @foreach($cities as $city)
                    <li class="text-xl text-gray-700 flex justify-between items-center border-b border-gray-300 py-2">
                        <span>{{ ucfirst($city->name) }}</span>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>

</body>
</html>
