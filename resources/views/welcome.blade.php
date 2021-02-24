@extends('template.main')
@section('content')
@foreach ($fruitdata as $fruit)
<div class="card m-2" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$fruit->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$fruit->qantité}}</h6>
    </div>
</div>
@endforeach
</div>

<div class="container d-flex">
@foreach ($legumedata as $legume)
<div class="card m-2" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$legume->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$legume->qantité}}</h6>
    </div>
</div>
@endforeach
@endsection