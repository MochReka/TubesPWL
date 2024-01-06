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
 
        <div class="content">
            <div class="p-2 m-3 border-spacing-8">
                <x-primary-button tag="a" href="{{ route('BarangKeluar.create') }}">Add</x-primary-button>
                    <br /><br />
                    <x-table>
                        <x-slot name="header">
                            <tr>
                                <th>#</th>
                                <th>Tanggal Keluar</th>
                                <th>Kode Barang Keluar</th>
                                <th>Jumlah keluar</th>
                                <th>Tujuan</th>
                                <th>Aksi</th>
                            </tr>
                        </x-slot>
                        @php $num=1; @endphp
                        @foreach($barang_keluar as $barangkeluar)
                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $barangkeluar->tgl_keluar }}</td>
                            <td>{{ $barangkeluar->kode_barang_keluar }}</td>
                            <td>{{ $barangkeluar->jumlah_keluar }}</td>
                            <td>{{ $barangkeluar->tujuan }}</td>
                            <td>

                                <x-primary-button tag="a" href="{{route('BarangKeluar.edit', $barangkeluar->id)}}">Edit</x-primary-button>

                                <x-danger-button x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-book-deletion')"
                                x-on:click="$dispatch('set-action', '{{ route('BarangKeluar.destroy', $barangkeluar->id) }}')">
                                {{ __('Delete') }}
                            </x-danger-button>
                            </td>
                        </tr>
                        @endforeach
                    </x-table>
                 
                </div>
           
            </div>
        </div>
    </body>
    </html>