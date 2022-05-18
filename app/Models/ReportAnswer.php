<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportAnswer extends Model
{
    use HasFactory;

    protected $table = 'report_answer';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name_user', 'answer'
    ];

    public function news ()
    {
        $this->belongsToMany('App\Models\ReportAnswer', 'id', 'name_user', 'answer');

    }
}
