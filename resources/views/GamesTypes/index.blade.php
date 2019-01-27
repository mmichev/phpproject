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
    <form>
    @foreach ($gametypes as $gametype)
    <tr>
        <td>{{$gametype -> Type}}</td>
        <td>{{$gametype -> Description}}</td>
        
        <td>
            
            <a class="btn btn-primary" href="{{route('gamestypes.show', $gametypes -> id)}}" method="POST"> SHOW</a>
            <a class="btn btn-primary" href="{{route('gamestypes.edit', $gametypes -> id)}}" method="POST"> EDIT</a>
        </td>
        </tr>
        @endforeach
    </form>
</table>
    </div>
</div>
@endsection