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
<h3>Form Input Santri</h3>
<form method="post" action="{{route('simpanrpl')}}">
  @csrf
  <div class="form-group">
    <label>Nama Siswa</label>
    <input type="text" name="Nama_Siswa" class="form-control" placeholder="Nama Siswa" required="">
  </div>
  <div class="form-group">
    <label>Kelas</label>
    <input type="varchar" name="Kelas" class="form-control" placeholder="Kelas" required="">
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="varchar" name="Jenis_Kelamin" class="form-control" placeholder="Jenis Kelamin" required="">
  </div>
  <div class="form-group">
    <label>Umur</label>
    <input type="integer" name="Umur" class="form-control" placeholder="Umur" required="">
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection