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
        <a class="btn btn-primary" href="{{route('gametypes.show', $gametype->id)}}" method="POST"> SHOW</a>
        </td>
        <td>
        <a class="btn btn-primary" href="{{route('gametypes.edit', $gametype->id)}}" method="POST"> EDIT</a></td>
        <td>
            <form action="{{ route('gametypes.destroy', $gametype->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
        </td>
        </tr>
        @endforeach
    </form>
</table>
       <a class="btn btn-success" href="{{route('gametypes.create')}}" method="GET"> Create</a>
    </div>
</div>
@endsection