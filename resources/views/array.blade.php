@extends('layout.master')

@section('content')
<div class="container m-t-100 m-b-100">
    <table class="table">
        <thead>
            <th>menu</th>
            <th></th>
        </thead>
        <tbody>
        @foreach ($p as $key => $item)
         <tr >
             <td>{{ $item["name"] }}</td>
             <td>{{ $item["number"] }}</td>
        </tr>


        @endforeach
    </tbody>
    </table>

</div>

@endsection
