<h1 class="text-center">Upload your File</h1>

<form action="/img" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group">
      <input type="file" name="src"/>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Img</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($img as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>
        <img height="80px" src="{{asset('storage/'.$item->src)}}" alt="">
      </td>
      <td>
        <form action="/img/{{$item->id}}" method="POST">
          @csrf
          @method("DELETE")
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td>
        <a class="btn btn-info" href="">Update</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>