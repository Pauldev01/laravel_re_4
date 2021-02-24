@extends('template.main')
@section('content')
<form class="container mt-5 mb-5" action="/administration" method="get">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="reponse">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection