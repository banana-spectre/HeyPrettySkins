<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_image', 
        'product_name', 
        'product_details', 
        'product_price', 
        'product_description', 
        'total_qty'
    ];

    /*public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }*/
}
