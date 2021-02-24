@extends('template.mainadm')
@section('content')
    <div class="container mt-5">
        <div class="card">
          {{-- {{dd($show->id)}} --}}
            <h5 class="card-title">{{$show->id}}</h5>
            <h6 class="card-subtitle mb-2">{{$show->name}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">{{$show->qantité}}</h6>
        </div>
    </div>

    {{-- btn delete--}}
    @if (  Str::contains(url()->current(),"legume-showadm"))

    <form action="/legume-delete/{{$show->id}}"method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Delete legume</button>
      </form>

    @else
    <form action="/fruit-delete/{{$show->id}}"method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Delete fruit</button>
      </form>
    @endif

    {{-- btn edit--}}

    @if (  Str::contains(url()->current(),"legume-showadm"))
      <form >
        <td><a class="btn btn-primary" href='/editlegumeadm/{{$show->id}}'>Edit</a></td>
      </form>
    @else
      <form >
        <td><a class="btn btn-primary" href='/editfruitadm/{{$show->id}}'>Edit</a></td>
      </form>
    @endif
    
@endsection