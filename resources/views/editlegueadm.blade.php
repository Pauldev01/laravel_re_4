@extends('template.mainadm')
@section('content')
<form class="container mt-5" action="/legume-update/{{$legumedata->id}}" method="POST">
    @csrf
      <div class="form-group">
        <label for="">Legume</label>
        <input type="text" name="name" class="form-control" value="{{$legumedata->name}}" id="" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
          <label for="">Quantite</label>
          <input type="number" name="qantité" class="form-control" value="{{$legumedata->qantite}}" id="" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection