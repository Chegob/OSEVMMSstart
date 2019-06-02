<?php

namespace App\Http\Controllers;
use App\Events\NewVehicleHasRegisteredEvent;
use App\Vehicle;
use App\Company;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $vehicles = Vehicle::all();
      
       return view('vehicles.index', compact('vehicles'));
           
    }

    public function create()
    {
        $companies = Company::all();
        $vehicle = new Vehicle();

        return view('vehicles.create', compact('companies', 'vehicle'));
    }
    
    public function store()
    {
        $vehicle = Vehicle::create($this->validateRequest());
       
        event(new NewVehicleHasRegisteredEvent($vehicle));
        
        return redirect('vehicles');
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        $companies = Company::all();
        
        return view('vehicles.edit', compact('vehicle', 'companies'));
    }

    public function update(Vehicle $vehicle)
    {
        $vehicle->update($this->validateRequest());
       
        return redirect('vehicles/'. $vehicle->id);
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        
        return redirect('vehicles');
     }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'branch' => 'required',
            'active' => 'required',
            'company_id' => 'required',
       ]);
    }
}
