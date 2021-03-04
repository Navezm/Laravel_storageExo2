<div class="row">
  @foreach ($animals as $item)
   <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="{{asset('storage/'.$item->src)}}" height="300px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$item->name}}</h5>
      </div>
    </div>
   </div>
   @if ($loop->iteration % 3 == 0)
    </div>
    <div class="row">
   @endif
  @endforeach
</div>