@extends('layouts.app')
@section('title','Product')
@section('content')

    <table class="table table-striped">
        <h2 style="text-align: center;">Tabel Product</h2>
        <br>
        <tr>
            <th>ID</th>
            <th>Nama Product</th>
        </tr>
        @foreach($products as $p)
        <tr>
            <td>{{$p['id']}}</td>
            <td>{{$p['nama_product']}}</td>
        </tr>
        @endforeach
    </table>

@endsection
