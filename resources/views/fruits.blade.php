@extends('template.main')
@section('content')
@foreach ($fruitdata as $fruit)  
@if (Str::length($fruit->name)>=7)   
<div class="card m-2 bg-primary" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$fruit->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$fruit->qantite}}</h6>
      <td><a class="btn btn-success" href="">Show</a></td>
    </div>
</div>
@else
<div class="card m-2 " style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$fruit->name}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$fruit->qantite}}</h6>
    <td><a class="btn btn-success" href="/fruit-show/{{$fruit->id}}">Show</a></td>
  </div>
</div>
@endif
@endforeach
@endsection