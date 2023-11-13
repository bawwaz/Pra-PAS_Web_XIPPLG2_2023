@extends('layouts.main')

@section('container')
  <h3>Data item</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php 
        $no = 1;
      @endphp

      @foreach ($items as $item) {{-- Change $Item to $items --}}
        <tr>  
          <td>{{$no++}}</td>
          <td>{{$item->brand}}</td>
          <td>{{$item->price}}</td>
          <td>
            <a href="/item/detail/{{$item->id}}" class="btn btn-primary">Detail</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
