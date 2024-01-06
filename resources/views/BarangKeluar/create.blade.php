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
                <form method="post" action="{{ route('BarangKeluar.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                    @csrf
                    <div class="max-w-xl">
                        <x-input-label for="kode_barang_keluar" value="Kode Barang Keluar" />
                        <x-text-input id="kode_barang_keluar" type="text" name="kode_barang_keluar" class="mt-1 block w-full" value="{{ old('kode_barang_keluar')}}"
                            required />
                        <x-input-error class="mt-2" :messages="$errors->get('kode_barang_keluar')" />
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="jumlah_keluar" value="Jumlah Keluar" />
                        <x-text-input id="jumlah_keluar" type="number" name="jumlah_keluar" class="mt-1 block w-full" value="{{ old('jumlah_keluar')}}"
                            required />
                        <x-input-error class="mt-2" :messages="$errors->get('jumlah_keluar')" />
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="tujuan" value="Tujuan" />
                        <x-text-input id="tujuan" type="text" name="tujuan" class="mt-1 block w-full" value="{{ old('tujuan')}}"
                            required />
                        <x-input-error class="mt-2" :messages="$errors->get('tujuan')" />
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="tgl_keluar" value="Tanggal Keluar" />
                        <x-text-input id="tgl_keluar" type="date" name="tgl_keluar" class="mt-1 block w-full" value="{{old('tgl_keluar')}}"
                            required />
                        <x-input-error class="mt-2" :messages="$errors->get('tgl_keluar')" />
                    </div>

                    <x-secondary-button tag="a" href="{{ route('BarangKeluar') }}">Cancel</x-secondary-button>
                    <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
                    <x-primary-button name="save" value="true">Save</x-primary-button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
