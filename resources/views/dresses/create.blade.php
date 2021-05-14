@extends('layouts.app')



@section('title', 'Inserimento Vestito')

@section('content')

<form action="{{route('vestiti.store')}}" method="post">
  @csrf
  @method('POST')
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
      <label for="color">Color:</label>
      <input type="text" class="form-control" name="color" id="color">
    </div>

    <div class="form-group">
      <label for="size">Size:</label>
      <input type="text" class="form-control" name="size" id="size">
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" name="description" id="description">
    </div>

    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" name="price" id="price">
    </div>
    <div class="form-group">
      <label for="season">Season:</label>
      <input type="text" class="form-control" name="season" id="season">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>


@endsection