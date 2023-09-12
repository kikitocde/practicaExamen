<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movil extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'moviles';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identidadMovil',
        'chapaMovil',
        'chasisMovil',
        'marcaMovil',
        'modeloMovil',
        'tipoMovil',
        'añoMovil',
        'motorMovil',
        'capacidadTanque',
        'tipoAmbulancia',
        'raspMovil',
        'baseMovil',
        'aseguradoraMovil',
        'agenteSeguroMovil',
        'telAgenteSeguro',
        'mailAseguradora',
        'polizaNroMovil',
        'vencimientoPolizaMovil',
        'tarjetaPETROPAR',
        'DATE_CREATED',
        'DATE_UPDATED',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idMovil';

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->DATE_CREATED = now();
        });

        static::updating(function ($model) {
            $model->DATE_UPDATED = now();
        });
    }





    public function statusMovil()
    {
        return $this->hasOne(StatusMovil::class, 'movilID', 'idMovil');
    }

    public function marcaMovil()
    {
        return $this->hasOne(MarcaMovil::class, 'nombreMarcaMovil', 'marcaMovil');
    }

    public function tipoAmbulancia()
    {
        return $this->hasOne(TipoAmbulancia::class, 'nombreTipoAmbulancia', 'tipoAmbulancia');
    }
    // public function subdepartamentos()
    // {
    //     return $this->belongsToMany(SubDepartamento::class, 'establecimiento_sector', 'idSector', 'idSubDepto');
    // }

     /**
     * Define the relationship between sectors and establishments.
     */
    // public function establecimientos()
    // {
    //     return $this->belongsToMany(Establecimiento::class, 'establecimiento_sector', 'idSector', 'idEst')
    //         ->withPivot('idDepto', 'idSubDepto', 'date_created', 'date_updated')
    //         ->withTimestamps();
    // }


}
