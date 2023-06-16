@extends('layouts.main')
@section('title', 'eMaha - Student')

@section('content')
    <div class="card mt-4">
        <div class="card-header">

            <a href="/student/formadd" class="btn btn-primary" role="button"><i class="bi bi-plus-square"></i> Student</a>

            <form action="/student/search" method="GET" class="form-inline my-2 my-lg-0 float-right">
                <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <div class="form-group my-2 mr-sm-2">
                    <select name="pilihan" class="form-control">
                        <option value="nim">NIM</option>
                        <option value="nama">Nama</option>
                    </select>
                </div>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>

            </form>
        </div>

        <div class="card-body">
            {{-- alert --}}
            @if (session('flash'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('flash') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">GENDER</th>
                        <th scope="col">PRODI</th>
                        <th scope="col">MINAT</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mhs as $index => $item)
                        <tr>
                            <th scope="row">{{ $mhs->firstItem() + $index }}</th>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->prodi }}</td>
                            <td>{{ $item->minat }}</td>
                            <td>
                                <a href="/student/formedit/{{ $item->id }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="/student/hapus/{{ $item->id }}" class="btn btn-danger"  onclick="return confirm ('yakin?');"><i class="bi bi-x-square"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <span class="float-right"> {{ $mhs->links() }}</span>
            <p>Total Seluruh Data : {{ $mhs->total() }}</p>
            <p>Jumlah Per halaman : {{ count($mhs) }}</p>
        </div>
    </div>
@endsection
