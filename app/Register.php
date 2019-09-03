<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = ['event_id', 'person_id', 'check_in', 'check_out', 'is_loading', 'is_food', 'food_description', 'notes'];

}
