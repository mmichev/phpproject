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