<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{

    use HasFactory;

    protected $table = 'sales';
    
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'client_id', 'product','debit', 'quantity','price'
    ];

    public function get_clientId()
    {
        return $this->hasMany(ClientsModel::class,'client_id','clients');
    }

    public function get_product()
    {
        return $this->hasOne(Product::class, 'barcode' , 'product');
        
    }

    public function get_payment()
    {
        return ($this->quantity * $this->price) - $this->debit;
    }

    public function lasted_debt()
    {
        return ($this->quantity * $this->price);
    }

    public function news ()
    {
        $this->belongsToMany('App\Models\Sale', 'id', 'client_id', 'product', 'quantity', 'price',  'debit' );
    }
    
}
