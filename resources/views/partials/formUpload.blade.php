<h1 class="text-center">Upload your File</h1>
<form action="animal" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="exampleInputEmail1">Upload your image</label>
      <input type="file" name="src"/>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>