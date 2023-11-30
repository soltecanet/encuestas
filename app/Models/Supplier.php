<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;
use App\Models\Commune;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'direction',
        'region_id',
        'commune_id'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }


}
