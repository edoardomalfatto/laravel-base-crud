@extends('layouts.app')



@section('title', 'Vestiti')

@section('content')


<h1>I vestiti</h1> 


<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Color</th>
        <th scope="col">Size</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($vestiti as $vestito)
        <tr>
            <th scope="row">{{$vestito['id']}}</th>
            <td>{{$vestito['name']}}</td>
            <td>{{$vestito['color']}}</td>
            <td>{{$vestito['size']}}</td>
            <td>{{$vestito['description']}}</td>
            <td>
                <a href="{{route ('vestiti.show',["vestiti"=> $vestito -> id])}}" class="btn btn-info">Tutti i Dettagli</a>
            </td>
          </tr>  
        @endforeach

    </tbody>
  </table>

@endsection
