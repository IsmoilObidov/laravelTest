<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    use HasFactory;


    protected $table = 'clients';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'phoneNumber'
    ];

    public function getDebit()
    {
        return $this->hasMany(Sale::class, 'client_id' , 'id')->sum('debit') - $this->hasMany(Debt_payment::class, 'client_id' , 'id')->sum('summa');
    }


    public function purchaseCount()
    {
        return $this->hasMany(Sale::class, 'client_id' , 'id')->count();
    }


    public function get_sale()
    {
        return $this->hasMany(Sale::class, 'client_id' , 'id');
    }

    
    public function debitCount()
    {
        return $this->hasMany(Sale::class, 'client_id' , 'id')->where('debit', $this->debit)->count();
    }
    
    public function news ()
    {
        $this->belongsToMany('App\Models\ClientsModel', 'id', 'name', 'address', 'phoneNumber');

    }

    
    public function get_paid_debit()
    {
        return $this->hasMany(Debt_payment::class, 'client_id' , 'id');
    }
    
}
