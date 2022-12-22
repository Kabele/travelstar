<?php

namespace App\Models;

use App\Models\Department;
use App\Models\Designation;
use App\Models\State;
use App\Models\Lga;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname','lastname','uuid',
        'email','phone',
        'department_id','designation_id','dob','avatar', 'joindate', 'maritalstatus', 'state','lga','religion','level','officialphone'
    ];


    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function designation(){
        return $this->belongsTo(Designation::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    } 

    public function lga()
    {
      return $this->belongsTo(Lga::class);  
    }

    
}
