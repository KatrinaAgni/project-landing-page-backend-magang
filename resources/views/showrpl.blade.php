<!-- resources/views/search.blade.php -->

@if ($tb_rpl->count() > 0)
    <table class="table">
        <thead>
            <tr>
                <th>ID Siswa</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tb_rpl as $s) 
        <tr>
            <td>{{$s->id_siswa}}</td>
            <td>{{$s->Nama_Siswa}}</td>
            <td>{{$s->Kelas}}</td>
            <td>{{$s->Jenis_Kelamin}}</td>
            <td>{{$s->Umur}}</td>
            <td>
            {{-- <a href="/tb_rpl/show" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a> --}}
                <a href="/tb_rpl/ubah/{{$s->id_siswa}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                <a href="/tb_rpl/hapus/{{$s->id_siswa}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
  @endforeach
        </tbody>
    </table>
@else
    <p>Data tidak ditemukan.</p>
@endif
{{-- @extends('admin')
  
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail User
            </div>
            <div class="card-body">
                @foreach($tb_rpl as $s) 
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID Siswa: </b>{{$s->id_siswa}}</li>
                    <li class="list-group-item"><b>Nama Siswa: </b>{{$s->Nama_Siswa}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$s->Kelas}}</li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b>{{$s->Jenis_Kelamin}}</li>
                    <li class="list-group-item"><b>Umur: </b>{{$s->Umur}}</li>
                </ul>
                @endforeach
            </div>
            <a class="btn btn-success mt-3" href="{{ route('tampilrpl') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection --}}