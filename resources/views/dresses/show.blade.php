@extends('layouts.app')



@section('title', 'Vestiti')

@section('content')

<h1>Dettaglio del vestito</h1>


<table class="table">
    <thead>
      <tr>
        <th scope="col">Season</th>
        <th scope="col">Name</th>
        <th scope="col">Color</th>
        <th scope="col">Size</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>

      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$vestito['season']}}</th>
            <td>{{$vestito['name']}}</td>
            <td>{{$vestito['color']}}</td>
            <td>{{$vestito['size']}}</td>
            <td>{{$vestito['description']}}</td>
            <td>{{$vestito['price']}}</td>
        </tr>  
       

    </tbody>
  </table>





@endsection