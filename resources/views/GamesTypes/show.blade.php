@extends('layout')

@section('content')
<table>
    <tr>
        <th>Type</th>
        <th>Description</th>
        
    </tr>
    <tr>
      <td>{{$gametype -> Type}}</td>
        <td>{{$gametype -> Description}}</td>
    </tr>
</table>
@endsection