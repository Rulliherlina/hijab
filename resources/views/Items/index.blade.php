@extends('layouts.app')

@section('title', 'Tokoo')

@section('content')
<a href="/items/create" class="card-link">Tambah Item</a>
@foreach ($items as $item)

<div class="card" style="width: 18rem;">
  <img src="{{ url('foto') }}/{{ $item['gambar'] }}" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="/items/{{ $item['id']}}" class="card-title">Nama  {{ $item['nama'] }}</a>
    <table class="table">
    <tbody>
    <tr>
    <td>Harga</td>
    <td>:</td>
    <td>Rp. {{ $item['harga'] }}</td>
    </tr>
    <tr>
    <td>Stok</td>
    <td>:</td>
    <td>{{ $item['stok'] }}</td>
    </tr>
    </tbody>
    </table>
    <a href="/items/{{$item['id']}}/edit" class="btn btn-primary">Edit Item</a>
    <form action="/items/{{ $item['id']}}" method="POST">
      @csrf
      @method('DELETE')
    <button class="btn btn-primary">Hapus</button>
    </form>
  </div>
</div>
@endforeach
<div>
    {{$items->links()}}
</div>
@endsection