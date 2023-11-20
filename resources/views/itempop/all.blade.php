@extends('layouts.main')

@section('container')
<h3>Data popularitas item</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Continent</th>
            <th scope="col">ranking</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp

        @foreach ($itempopularities as $itempop) 
        <tr>
            <td>{{$no++}}</td>
            <td>{{$itempop->from}}</td>
            <td>{{$itempop->ranking}}</td>
            <td>{{$itempop->brand}}</td>

            

            <td>
                <a href="/itempop/detail/{{$itempop->id}}" class="btn btn-primary">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection