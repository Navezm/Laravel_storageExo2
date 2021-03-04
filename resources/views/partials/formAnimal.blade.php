<form action="/animal" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Image</label> <br>
        @foreach ($img as $item)
            <input type="radio" name="src" value="{{$item->src}}"> <img height="70px" src="{{asset('storage/'.$item->src)}}" alt=""> <br> <br>
        @endforeach
    </div>
    <button class="btn btn-info" type="submit">Submit</button>
</form>