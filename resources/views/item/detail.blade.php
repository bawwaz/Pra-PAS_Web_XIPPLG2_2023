@extends('layouts.main')

@section('container')
<h3>Detail</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @php 
    $no = 1
    @endphp

    <tr>  
      <td>{{$no++}}</td>
      <td>{{$item->brand}}</td>
      <td>{{$item->desc}}</td>
      <td>{{$item->price}}</td>
      <td>
        <a href="{{ route('item.all') }}" class="btn btn-primary">back</a>
      </td>

    </tr>
  </tbody>
</table>

@endsection