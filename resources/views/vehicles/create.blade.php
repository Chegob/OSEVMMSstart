@extends('layout')

@section('title', 'Add New Vehicles')
 
@section('content')
<div class="row">
   <div class="col-12">
      <h1>Add New Vehicles</h1>
   </div>
</div>

<div class="row">
 <div class="col-12">
   <form action="/vehicles" method="POST">
         @include('vehicles.form')

     <button type="submit" class="btn btn-primary">Add Vehicle</button>
   
   </form>
  </div>
</div>
@endsection
@csrf