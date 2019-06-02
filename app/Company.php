<?php

namespace App;
use App\Company;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
