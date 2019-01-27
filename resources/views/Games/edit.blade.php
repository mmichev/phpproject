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
<form action="{{action('GamesController@update' ,$games->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" class="form-control" name="_method" value="patch"/>
    <div class="form-group">
    {{csrf_field()}}
        <label for="gamename">GameName:</label>
        <input value="{{$games['GameName']}}" type="text" class="form-control" name="GameName" id="gamename"/>
    </div>
    <div class="form-group">
    {{csrf_field()}}
        <label for="type">Type:</label>
        <input value="{{$games['Type']}}" type="text" class="form-control" name="Type" id="type"/>
    </div>
    
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
    </div>
</div>
@endsection