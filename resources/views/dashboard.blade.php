{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite ('resources/css/app.css')
    <style>
        .flex-container {
            display: flex;
        }

        .sidebar {
            width: 20%; /* Sesuaikan lebar sidebar sesuai kebutuhan */
        }

        .content {
            width: 105%; /* Sisakan ruang untuk konten utama */
        }
    </style>
</head>
<body>
    <div class="navbar">
        <x-navbar/>
    </div>
    <div class="flex-container">
        <div class="sidebar">
            <x-sidebar/>    
        </div>
        <div class="content">
            <div class="p-2 m-3 border-spacing-8">
                  
            </div>
        </div>
    </div>
</body>

</html>

