@extends('admin')

@section('gambar1')
<img src="{{ asset('img/WhatsApp Image 2023-07-08 at 12.33.34 AM.jpeg') }}" alt="gambar">
@endsection
@section('gambar2')
<img src="{{ asset('img/WhatsApp Image 2023-07-08 at 12.33.37 AM.jpeg') }}" alt="gambar">
@endsection
@section('gambar3')
<img src="{{ asset('img/WhatsApp Image 2023-07-08 at 12.33.35 AM.jpeg') }}" alt="gambar">
@endsection
@section('gambar4')
<img src="{{ asset('img/WhatsApp Image 2023-07-08 at 12.33.37 AM (1).jpeg') }}" alt="gambar">
@endsection
@section('gambar5')
<img src="{{ asset('img/WhatsApp Image 2023-07-08 at 12.33.35 AM (1).jpeg') }}" alt="gambar">
@endsection
@section('gambar6')
<img src="{{ asset('img/WhatsApp Image 2023-07-08 at 12.33.36 AM.jpeg') }}" alt="gambar">
@endsection
@section('gambar7')
<img src="{{ asset('img/WhatsApp Image 2023-07-08 at 12.33.38 AM.jpeg') }}" alt="gambar">
@endsection


@section('konten')
<h3>Tampil Data RPL</h3>
<a class="btn btn-success" href="{{route('tambahrpl')}}"><i class="fa fa-plus"></i> Tambah RPL</a>
<br><br>

{{-- <p>Cari Data Pegawai :</p>
<form action="/welcome/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<br> --}}
<form action="{{ route('showrpl') }}" method="GET" class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" name="keyword" class="form-control" placeholder="Cari data...">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Cari</button>
</form>
<br>

<table class="table table-bordered table-hover">
  <tr>
    <th>Id Siswa</th>
    <th>Nama Siswa</th>
    <th>Kelas</th>
    <th>Jenis Kelamin</th>
    <th>Umur</th>
    <th>Aksi</th>
  </tr>
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
</table>

@endsection