<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt_payment extends Model
{
    use HasFactory;

    protected $table = 'debt_payment';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'summa'
    ];

    public function getDebit()
    {
        return $this->hasMany(Sale::class, 'client_id' , 'id')->sum('debit') - $this->hasMany(Debt_payment::class, 'client_id' , 'id')->sum('summa');
    }
    
    public function news ()
    {
        $this->belongsToMany('App\Models\Debt_paymen', 'client_id', 'summa', 'data');

    }

    public function get_client()
    {
        return $this->hasOne(ClientsModel::class, 'id' , 'client_id');
        
    }

    public function lasted_debt()
    {
        return $this->summa;
    }


    
}
