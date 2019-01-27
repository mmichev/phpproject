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
    <form>
    @foreach ($games as $game)
    <tr>
        <td>{{$game -> GameName}}</td>
        <td>{{$game -> Type}}</td>
        
        <td>
            
            <a class="btn btn-primary" href="{{route('games.show', $game -> id)}}" method="POST"> SHOW</a>
            <a class="btn btn-primary" href="{{route('games.edit', $game -> id)}}" method="POST"> EDIT</a>
        </td>
        </tr>
        @endforeach
    </form>
</table>
    </div>
</div>
@endsection