@extends('layouts.app')



@section('title', 'Vestiti')

@section('content')


<h1>I vestiti</h1> 

<a href="{{route('vestiti.create')}}" class="btn btn-primary">Inserisci Vestito</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Color</th>
        <th scope="col">Size</th>
        <th scope="col">Description</th>
        <th class="left-margin" scope="col">Actions</th>
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
            <td class="actions">
                <a href="{{route ('vestiti.show',["vestiti"=> $vestito -> id])}}" class="btn btn-info">Tutti i Dettagli</a>

                
                <a href="{{route ('vestiti.edit',["vestiti"=> $vestito -> id])}}" class="btn btn-warning">Modifica</a>

                <form action="{{route ('vestiti.destroy',["vestiti"=> $vestito -> id])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Cancella</button>
                </form>
              
            </td>

            
          </tr>  
        @endforeach

    </tbody>
  </table>

@endsection
