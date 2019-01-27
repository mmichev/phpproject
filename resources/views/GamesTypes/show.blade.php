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
        <th>Type</th>
        <th>Description</th>
        
    </tr>
    <tr>
      <td>{{$gametype -> Type}}</td>
        <td>{{$gametype -> Description}}</td>
    </tr>
</table>
    </div>
</div>
@endsection