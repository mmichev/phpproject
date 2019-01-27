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
<form action="{{action('GamesTypesController@update' ,$gametype->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" class="form-control" name="_method" value="patch"/>
    <div class="form-group">
    {{csrf_field()}}
        <label for="type">Type:</label>
        <input value="{{$gametype['Type']}}" type="text" class="form-control" name="Type" id="type"/>
    </div>
    <div class="form-group">
    {{csrf_field()}}
        <label for="description">Description:</label>
        <input value="{{$gametype['Description']}}" type="text" class="form-control" name="Description" id="description"/>
    </div>
    
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
    </div>
</div>
@endsection