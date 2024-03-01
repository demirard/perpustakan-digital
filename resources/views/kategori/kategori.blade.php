@extends('layouts.master')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="mb-4">
                            <a href="{{ route('kategori.create') }}" class="btn btn-dark">
                                + Tambah Data Kategori
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Nama Kategori</th>
                                    <th class="px-4 py-2">Aksi</th>

                                    
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kategori as $k)
                                    <tr>
                                        <td class="px-4 py-2">{{ $k->nama_kategori }}</td>
                                        <td class= "px-4 py-2">
                                            <form action="{{route('kategori.destroy', $k->id)}}" method="POST">
                                                @csrf 
                                                @method('DELETE')

                                                <button class="btn btn-dark" type="submit">
                 
                                                <i class="fa fa-trash-alt"></i>
</button>
<a href="{{ route('kategori.edit', $k->id) }}" class="btn btn-dark">
<i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                              
                             
</form>
</td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-4 py-2 text-center">Tidak ada data kategori.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection