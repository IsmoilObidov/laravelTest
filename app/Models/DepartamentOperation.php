<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartamentOperation extends Model
{
    use HasFactory;

    protected $table = 'departament_operation';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','departament_id'
    ];

    public function get_departament()
    {
        return $this->hasOne(DepartamentModel::class,'id', 'departament_id');
    
    }


    public function news ()
    {
        $this->belongsToMany('App\Models\DepartamentOperation', 'id', 'name', 'departament_id');

    }
}
