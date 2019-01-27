@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add GameClub
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
<form action="/gameclubs" method="post">
    {{csrf_field()}}
    <div class="form-group">
        {{csrf_field()}}
        <label for="name"> Name:</label>
        <input type="text" class="form-control" name="Name" id="name"/>
    </div>
    
    <div class="form-group">
        {{csrf_field()}}
        <label for="capacity"> Capacity:</label>
        <input type="text" class="form-control" name="Capacity" id="capacity"/>
    </div>
    
    <div class="form-group">
        {{csrf_field()}}
        <label for="gamename"> GameName:</label>
        <input type="text" class="form-control" name="GameName" id="gamename"/>
    </div>
    
    <div class="form-group">
    <button type="submit" class="btn btn-primary">submit</button>
    </div>
    
</form>
    </div>
</div>
   @endsection  