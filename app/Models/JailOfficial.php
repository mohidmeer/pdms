<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JailOfficial extends Model
{
    use HasFactory;

    protected $fillable = [
        'prison',
        'distance_km',
        'name_of_official',
        'department_designation',
        'contact_no',
        'city',
        'region'
    ];


    public function scopeSearchString(Builder $query, $search): Builder
    {
        return $query->where('prison', 'LIKE', '%' . $search . '%')->
        orWhere('distance_km', 'LIKE', '%' . $search . '%')->
        orWhere('name_of_official', 'LIKE', '%' . $search . '%')->
        orWhere('department_designation', 'LIKE', '%' . $search . '%')->
        orWhere('city', 'LIKE', '%' . $search . '%')->
        orWhere('region', 'LIKE', '%' . $search . '%')->
        orWhere('contact_no', 'LIKE', '%' . $search . '%');
    }
}
