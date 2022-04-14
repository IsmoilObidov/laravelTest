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



    public function news ()
    {
        $this->belongsToMany('App\Models\Departament', 'id', 'name');
    }
}
