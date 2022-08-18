<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;

    protected $fillable = ['prisoner_id','prison','city','region','type','date','description','attachment'];


    public function scopeSearchString(Builder $query, $search): Builder
    {
        return $query->where('prison', 'LIKE', '%' . $search . '%')->
        orWhere('prisoner_id', 'LIKE', '%' . $search . '%')->
        orWhere('prison', 'LIKE', '%' . $search . '%')->
        orWhere('city', 'LIKE', '%' . $search . '%')->
        orWhere('region', 'LIKE', '%' . $search . '%')->
        orWhere('type', 'LIKE', '%' . $search . '%')->
        orWhere('date', 'LIKE', '%' . $search . '%')->
        orWhere('description', 'LIKE', '%' . $search . '%');
    }



}
