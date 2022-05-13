<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    use HasFactory;


    protected $table = 'report_bug';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name_user', 'report_to_admin'
    ];

    
    public function news ()
    {
        $this->belongsToMany('App\Models\HomeModel', 'id', 'name_user', 'report_to_admin');

    }
}
