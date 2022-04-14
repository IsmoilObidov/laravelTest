<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summa_departament extends Model
{
    use HasFactory;

    protected $table = 'summa_departament';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'departament_id', 'departament_oper_id','description', 'summa'
    ];
    
    public function news ()
    {
        $this->belongsToMany('App\Models\Summa_departament', 'id', 'departament_id', 'departament_oper_id','description', 'summa');

    }   
    
    public function departament_operation_name()
    {
        return $this->hasOne(DepartamentOperation::class,'id', 'departament_oper_id');
    }
}
