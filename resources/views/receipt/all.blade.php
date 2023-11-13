@extends('layouts.main')

@section('container')
  <h3>Receipt History</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Amount</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @php 
        $no = 1;
      @endphp

      @foreach ($receipts as $receipt)
        <tr>  
          <td>{{$no++}}</td>
          <td>{{$receipt->customer}}</td>
          <td>{{$receipt->total_item}}</td>
          <td>
            <a href="/receipt/detail/{{$receipt->id}}" class="btn btn-primary">Detail</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
