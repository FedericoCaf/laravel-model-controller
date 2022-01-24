@extends('layouts.main')

@section('content')
  
  <div class="container">

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">TITLE</th>
          <th scope="col">ORIGINAL-TITLE</th>
          <th scope="col">NATIONALITY</th>
          <th scope="col">DATE</th>
          <th scope="col">VOTE</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($movies as $movie) 
            <tr>
              <th scope="row"> {{ $movie->id }} </th>
              <td> {{ $movie->title }} </td>
              <td>{{ $movie->original_title }}</td>
              <td>{{ $movie->nationality }}</td>
              <td>{{ $movie->date }}</td>
              <td>{{ $movie->vote }}</td>
            </tr>
        @empty
          <h6> No data</h6>
        @endforelse
        
   
      
      </tbody>
    </table>


  </div>

@endsection