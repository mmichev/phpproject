@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Game
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
<table>
    <tr>
        <th>Name</th>
        <th>Capacity</th>
        <th>GameName</th>
    </tr>
    <tr>
      <td>{{$gameclub -> Name}}</td>
        <td>{{$gameclub -> Capacity}}</td>
        <td>{{$gameclub -> GameName}}</td>
    </tr>
</table>
    </div>
</div>
@endsection