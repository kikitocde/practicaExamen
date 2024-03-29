<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;

class Region extends Model
{
    use HasFactory;
    protected $table = 'region';
    protected $primaryKey =  'idRegion';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'nameRegion',
        'abrevRegion',

    ];

}
