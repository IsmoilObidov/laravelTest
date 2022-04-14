<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComings extends Model
{
    use HasFactory;

    protected $table = 'products_comings';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'barcode', 'quantity','price'
    ];
    
    public function news ()
    {
        $this->belongsToMany('App\Models\ProductComings', 'id', 'barcode', 'quantity' );

    }
}
