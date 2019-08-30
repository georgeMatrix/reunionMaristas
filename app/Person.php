<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';
    protected $fillable = ['campus_id', 'staff_id', 'full_name', 'job_email', 'personal_email'];

    public function campusesMethod(){
        return $this->belongsTo(Campus::class, 'campus_id');
    }
    public function staffMethod(){
        return $this->belongsTo(Staff::class, 'staff_id');
    }
}
