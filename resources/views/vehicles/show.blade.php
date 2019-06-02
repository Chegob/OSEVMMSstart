@extends('layout')

@section('title', 'Details for'.$vehicle->name)
 
@section('content')
<div class="row">
   <div class="col-12">
   <h1>Details for {{ $vehicle->name}}</h1>
   <p><a href="/vehicles/{{ $vehicle->id}}/edit">Edit</a></p>
   <form action="/vehicles/{{ $vehicle->id}}" method="POST">
    @method('DELETE')
    @csrf 

    <button class="btn btn-danger" type="submit">Delete</button>
   </div>
</div>

<div class="row">
 <div class="col-12">
   <p><strong>Name</strong>{{$vehicle->name}}</p>
   <p><strong>Branch</strong>{{$vehicle->branch}}</p>
   <p><strong>Company</strong>{{$vehicle->company->name}}</p>

  </div>
</div>
@endsection