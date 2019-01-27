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