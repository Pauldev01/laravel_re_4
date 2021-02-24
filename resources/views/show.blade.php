@extends('template.main')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-title">{{$show->id}}</h5>
            <h6 class="card-subtitle mb-2">{{$show->name}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">{{$show->qantité}}</h6>
        </div>
    </div>
@endsection