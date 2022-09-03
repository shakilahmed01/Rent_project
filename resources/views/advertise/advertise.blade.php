@extends('layouts.master')
@section('content')
<h1>Advertise</h1>
<br>
<br>
<br>
<form action="{{route('advertise')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title" id="exampleInputEmail1" >
  </div>
  <div class="col">
    <label for="exampleInputEmail2" class="form-label">photo</label>
    <input type="file" class="form-control" name="photo" id="exampleInputEmail2" >
  </div>
  <hr>
<div class="col-12">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
