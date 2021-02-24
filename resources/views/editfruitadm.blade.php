@extends('template.mainadm')
@section('content')
<form class="container mt-5" action="/fruit-update/{{$fruitdata->id}}" method="POST">
    @csrf
      <div class="form-group">
        <label for="">Fruit</label>
        <input type="text" name="name" class="form-control" value="{{$fruitdata->name}}" id="" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
          <label for="">Quantite</label>
          <input type="number" name="qantite" class="form-control" value="{{$fruitdata->qantite}}" id="" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection