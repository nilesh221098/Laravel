<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg p-8">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Pages List</h1>

            <!-- Displaying Success Message -->
            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-4 mb-4 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            
            <div class="flex justify-between items-center">
                <a href="{{ route('pages.create') }}" class="inline-block px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 mb-4">
                    Add Page
                </a>
                <a href="/" class="text-blue-600 hover:text-blue-800">Back to Home</a>
            </div>

              <ul class="space-y-4">
                @foreach($pages as $page)
                    <li class="border-b border-gray-300 pb-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <strong class="text-xl text-gray-800">{{ $page->name }}</strong> - 
                                <span class="text-blue-500">{{ ucfirst($page->city->name) }}</span>
                            </div>
                            <div class="flex space-x-4">
                                <a href="/{{ $page->url }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                                    View Page
                                </a>
                                <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</body>
</html>
