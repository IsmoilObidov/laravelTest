<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartamentModel extends Model
{
    use HasFactory;



    protected $table = 'departament';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name'
    ];

    public function summa()
    {
        try {
            return $this->hasMany(Summa_departament::class,'departament_id','id')->sum('summa');
        } catch (\Throwable $th) {}
    }


    public function get_operation()
    {
        return $this->hasMany(DepartamentOperation::class,'departament_id','id');
    }



    public function news ()
    {
        $this->belongsToMany('App\Models\Departament', 'id', 'name');
    }
}
