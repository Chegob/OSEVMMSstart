@extends('layout')

@section('title', 'Vehicles List')
 
@section('content')
<div class="row">
   <div class="col-12">
    <h1>Vehicles List</h1>
    <p><a href="vehicles/create">Add New Vehicle</a></p>
</div>
</div>

@foreach($vehicles as $vehicle)
  <div class="row">
      <div class="col-2">         
      {{ $vehicle->id }}  
      </div> 
      <div class="col-4">
         <a href="/vehicles/{{ $vehicle->id}}">{{ $vehicle->name }}</a>
      </div>
         <div class="col-4">{{ $vehicle->company->name }}</div> 
            <div class="col-2">{{ $vehicle->active }}</div>
  </div>    
 @endforeach
@endsection
 