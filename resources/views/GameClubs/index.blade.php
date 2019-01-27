@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<table>
    <tr>
        <th>Name</th>
        <th>Capacity</th>
        <th>GameName</th>
    </tr>
    <form>
    @foreach ($gameclubs as $gameclub)
    <tr>
        <td>{{$gameclub -> Name}}</td>
        <td>{{$gameclub -> Capacity}}</td>
        <td>{{$gameclub -> GameName}}</td>
        <td>
        <form action="{{ route('gameclubs.destroy', $gameclub->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
        </td>
        <td>
            
            
            <a class="btn btn-primary" href="{{route('gameclubs.show', $gameclub -> id)}}" method="POST"> SHOW</a>
            <a class="btn btn-primary" href="{{route('gameclubs.edit', $gameclub -> id)}}" method="POST"> EDIT</a>
        </td>
        @endforeach
    </form>
</table>
</div>
@endsection