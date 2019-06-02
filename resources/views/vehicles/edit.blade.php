@extends('layouts.app')

@section('title', 'Edit Details for' . $vehicle->name)
 
@section('content')

<div class="row">
   <div class="col-12">
   <h1>Edit Details for {{ $vehicle->name }}</h1>
   </div>
</div>

<div class="row">
 <div class="col-12">
 <form action="/vehicles/{{ route('vehicles.update', ['vehicle' => $vehicle]) }}" method="POST">
    @method('PATCH')     
    @include('vehicles.form')

     <button type="submit" class="btn btn-primary">Save Vehicle</button>
     </form>
  </div>
</div>

@endsection
