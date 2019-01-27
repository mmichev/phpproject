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
<form action="/gametypes" method="post">
    {{csrf_field()}}
    <div class="form-group">
        {{csrf_field()}}
        <label for="type"> Type:</label>
        <input type="text" class="form-control" type="Type" id="type"/>
    </div>
    
    <div class="form-group">
        {{csrf_field()}}
        <label for="description"> Description:</label>
        <input type="text" class="form-control" description="Description" id="description"/>
    </div>
    
    <div class="form-group">
    <button type="submit" class="btn btn-primary">submit</button>
    </div>
    
</form>
    </div>
</div>
@endsection