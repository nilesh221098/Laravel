{{--<h1>Add City</h1>
<form action="{{ route('cities.store') }}" method="POST">
    @csrf
    <label for="name">City Name:</label>
    <input type="text" name="name" required>
    <button type="submit">Save</button>
</form>--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add City</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif
    <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg w-full bg-white shadow-lg rounded-lg p-8">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Add New City</h1>

            <form action="{{ route('cities.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">City Name</label>
                    <input type="text" name="name" id="name" class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="flex justify-between items-center">
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Save City
                    </button>
                    <a href="/" class="text-blue-600 hover:text-blue-800">Back to Home</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
