<div class="form-group">
    <label for="name">Name</label>
  <input type="text" name="name" value="{{ old('name') ?? $vehicle->name }}" class="form-control"> 
      <div>{{ $errors->first('name') }}</div>
</div> 
 
<div class="form-group">
  <label for="branch">Branch</label>
  <input type="text" name="branch" value="{{ old('branch') ?? $vehicle->branch }}" class="form-control">
  <div>{{ $errors->first('branch') }}</div>
</div>

<div class="form-group">
  <label for="active">Status</label>
  <select name="active" id="active" class="form-control">
     <option value="" disabled>Select vehicle status</option>

      @foreach($vehicle->activeOptions() as $activeOptionKey => $activeOptionValue)
    <option value="{{$activeOptionKey}}" {{ $vehicle->active == $activeOptionValue ? 'selected' : ''}}>{{$activeOptionValue}}</option>
      @endforeach
  </select>
</div>

<div class="form-group">
  <label for="company_id">Company</label>
  <select name="company_id" id="company_id" class="form-control">
   @foreach ($companies as $company)
     <option value=" {{ $company->id }} "{{ $company->id == $vehicle->company_id ? 'selected' : ''}}>{{ $company->name }}</option>
   @endforeach  
  </select>
</div>

@csrf
