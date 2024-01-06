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
        {{-- <div class="sidebar">
            <x-sidebar/>    
        </div> --}}
        <div class="content">
            <div class="p-2 m-3 border-spacing-8">
                <form method="post" action="{{ route('Barang.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                    @csrf
                    <div class="max-w-xl">
                        <x-input-label for="title" value="Kode Barang" />
                        <x-text-input id="kode_barang" type="text" name="kode_barang" class="mt-1 block w-full" value="{{ old('kode_barang')}}"
                            required />
                        <x-input-error class="mt-2" :messages="$errors->get('kode_barang')" />
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="title" value="Nama Barang" />
                        <x-text-input id="nama_barang" type="text" name="nama_barang" class="mt-1 block w-full" value="{{ old('nama_barang')}}"
                            required />
                        <x-input-error class="mt-2" :messages="$errors->get('nama_barang')" />
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="title" value="Jenis" />
                        <x-text-input id="jenis" type="text" name="jenis" class="mt-1 block w-full" value="{{ old('jenis')}}"
                            required />
                        <x-input-error class="mt-2" :messages="$errors->get('jenis')" />
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="harga" value="Harga" />
                        <x-text-input id="harga" type="number" name="harga" class="mt-1 block w-full" value="{{old('harga')}}"
                            required />
                        <x-input-error class="mt-2" :messages="$errors->get('harga')" />
                    </div>

                    <x-secondary-button tag="a" href="{{ route('Barang') }}">Cancel</x-secondary-button>
                    <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
                    <x-primary-button name="save" value="true">Save</x-primary-button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
