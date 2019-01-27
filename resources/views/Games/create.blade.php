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
<form action="/games" method="post">
    {{csrf_field()}}
    <div class="form-group">
        {{csrf_field()}}
        <label for="GameName"> GameName:</label>
        <input for="GameName" type="text" class="form-control" name="GameName" id="GameName"/>
    </div>
    
    <div class="form-group">
        {{csrf_field()}}
        <label for="Type"> Type:</label>
        <input for="Type" type="text" class="form-control" name="Type" id="Type"/>
    </div>
    
    <div class="form-group">
    <button type="submit" class="btn btn-primary">submit</button>
    </div>
    
</form>
    </div>
</div>
@endsection