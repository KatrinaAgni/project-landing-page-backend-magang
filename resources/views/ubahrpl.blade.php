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
<h3>Ubah Data Siswa RPL</h3>
  @foreach($tb_rpl as $s)
    <form method="post" action="{{route('updaterpl')}}">
      @csrf
      <input type="hidden" name="id_siswa" value="{{$s->id_siswa}}">
      <div class="form-group">
        <label>Nama Siswa</label>
        <input type="text" name="Nama_Siswa" value="{{$s->Nama_Siswa}}" class="form-control" placeholder="Nama Siswa" required="">
      </div>
      <div class="form-group">
        <label>Kelas</label>
        <input type="varchar" name="Kelas" value="{{$s->Kelas}}" class="form-control" placeholder="Kelas" required="">
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="text" name="Jenis_Kelamin" value="{{$s->Jenis_Kelamin}}" class="form-control" placeholder="Jenis Kelamin" required="">
      </div>
      <div class="form-group">
        <label>Umur</label>
        <input type="integer" name="Umur" value="{{$s->Umur}}" class="form-control" placeholder="Umur" required="">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  @endforeach
@endsection
