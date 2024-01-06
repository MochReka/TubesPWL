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
                <x-primary-button tag="a" href="{{ route('Barang.create') }}">Add</x-primary-button>
                    <br /><br />
                <x-table>
                    <x-slot name="header">
                        <tr>
                            <th>#</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis</th> 
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <tr>
                        @php $num=1; @endphp
                        @foreach($barangs as $barang)
                            <td>{{$num++}}</td>
                            <td>{{$barang->kode_barang}}</td>
                            <td>{{$barang->nama_barang}}</td>
                            <td>{{$barang->jenis}}</td>
                            <td>{{$barang->harga}}</td>
                            <td>
                                {{-- <x-primary-button tag="a" href="{{route('Barang.edit', $barang->id)}}">Edit</x-primary-button> --}}
                                <form action="{{ route('Barang.destroy', $barang->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                        
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this barang?')">Delete Barang</button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </x-table>
                
            </div>
           
        </div>
    </div>
</body>
</html>
