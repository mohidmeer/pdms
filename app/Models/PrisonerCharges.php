<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrisonerCharges extends Model
{
    use HasFactory;

    protected $fillable = ['prisoner_id','crime_charges'];
}
