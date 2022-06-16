<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $table = 'products';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'quantity', 'discount', 'price','barcode','article','photo', 'description'
    ];

    public function get_history()
    {
        return $this->hasMany(ProductComings::class,'barcode','barcode');
    }

    public function sold_quantity()
    {
        return $this->hasMany(Sale::class,'product','barcode');
    }
    
    public function news ()
    {
        $this->belongsToMany('App\Models\Product', 'id', 'name', 'quantity', 'discount', 'price', 'barcode', 'article','photo','description' );

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
