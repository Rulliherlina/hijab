@extends('layouts.app')

@section('title', 'Tokoo')

@section('content')

@foreach ($pesans as $pesan)

<div class="card" style="width: 18rem;">
  <img src="{{ url('foto') }}/{{ $pesan['gambar'] }}" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Nama  {{ $pesan['nama'] }}</h5>
    <table class="table">
    <tbody>
    <tr>
    <td>Harga</td>
    <td>:</td>
    <td>Rp. {{ $pesan['harga'] }}</td>
    </tr>
    <tr>
    <td>Stok</td>
    <td>:</td>
    <td>{{ $pesan['stok'] }}</td>
    </tr>
    <tr>
    </tbody>
    </table>
    <a href="//pesans/{{$pesan['id']}}/beli" class="btn btn-primary">Beli</a>
    <form action="/pesans/{{ $pesan['id']}}" method="POST">
      @csrf
      @method('DELETE')
    </form>
  </div>
</div>
@endforeach
    {{$pesans->links()}}
@endsection