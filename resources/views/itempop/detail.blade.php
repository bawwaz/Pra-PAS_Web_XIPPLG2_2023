@extends('layouts.main')

@section('container')
<h3>Detail</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">stats from</th>
            <th scope="col">ranking</th>



        </tr>
    </thead>
    <tbody>
        @php
        $no = 1
        @endphp

        <tr>
            <td>{{$no++}}</td>
            <td>{{$itempop->from}}</td>
            <td>{{$itempop->ranking}}</td>
            

        </tr>
    </tbody>
</table>

@endsection