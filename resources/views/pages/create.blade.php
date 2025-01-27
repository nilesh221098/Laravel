
{{--<form action="{{ route('pages.store') }}" method="POST">
    @csrf
    <label for="name">Page Name:</label>
    <input type="text" name="name" required><br>

    <label for="description">Description:</label>
    <textarea name="description" required></textarea><br>

    <label for="city_id">City:</label>
    <select name="city_id" required>
        <option value="">Select City</option>
        @foreach($cities as $city)
            <option value="{{ $city->id }}">{{ ucfirst($city->name) }}</option>
        @endforeach
    </select><br>

    <button type="submit">Save</button>
 </form> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

   
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md mt-10">
       {{-- <a href="cities/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Add City</a>
        <br><br> 
            <a href="pages" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">Show Pages List</a>
        <br><br>--}}          
        
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-semibold mb-4">Add Page</h1>
            <a href="/" class="text-blue-600 hover:text-blue-800">Back to Home</a>
        </div>

        <form action="{{ route('pages.store') }}" method="POST">
            @csrf

            
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium">Page Name:</label>
                <input type="text" name="name" required 
                    class="mt-2 block w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" />
            </div>

           
            <div class="mb-4">
                <label for="description" class="block text-lg font-medium">Description:</label>
                <textarea name="description" required
                    class="mt-2 block w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" rows="4"></textarea>
            </div>

            
            <div class="mb-4">

                <label>
                    <input type="checkbox" id="select-all-cities"> Select All Cities
                </label>
                <br>
                
                <label for="city_id" class="block text-lg font-medium">Cities:</label>
                <select name="city_id[]" multiple
                    class="mt-2 block w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">
                            {{ ucfirst($city->name) }}
                        </option>
                    @endforeach
                </select>

            </div>

           
            <button type="submit" 
                class="mt-4 w-full py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Save Page
            </button>
        </form>
    </div>

</body>
<script>
    document.getElementById('select-all-cities').addEventListener('change', function() {
        const isChecked = this.checked;
        const cityOptions = document.querySelectorAll('select[name="city_id[]"] option');
        
        cityOptions.forEach(option => {
            option.selected = isChecked;
        });
    });
</script>

</html>
