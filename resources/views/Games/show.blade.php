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
        <th>GameName</th>
        <th>Type</th>
        
    </tr>
    <tr>
      <td>{{$games->GameName}}</td>
        <td>{{$games->Type}}</td>
    </tr>
</table>
    </div>
</div>
@endsection