@extends('template.mainadm')
@section('content')
<div class="container d-flex">
    @if ($count == 0)
        <h1>plus d'élèment</h1>
    @endif
    @foreach ($legumedata as $legume)
      @if (Str::length($legume->name)>=7)
      <div class="card m-2 bg-warning" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$legume->name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$legume->qantité}}</h6>
          <td><a class="btn btn-success" href="/legume-showadm/{{$legume->id}}">Show</a></td>
        </div>
    </div>       
      @else
      <div class="card m-2" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$legume->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$legume->qantité}}</h6>
            <td><a class="btn btn-success" href="/legume-showadm/{{$legume->id}}">Show</a></td>
          </div>
      </div>
      @endif 
    @endforeach
</div>

    <div>
        <a class="btn btn-success" href="{{route('addlegume')}}">Nouveau legumes</a>
    </div>
@endsection