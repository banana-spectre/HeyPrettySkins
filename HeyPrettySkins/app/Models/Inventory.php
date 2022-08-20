<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use SoftDeletes;
    protected $table = 'inventory';
    protected $primaryKey = 'id';
    protected $fillable = ['transac_date', 'area', 'code', 'best_before', 'type', 'qty', 'products_id'];

    public function products()
    {
        return $this->belongsTo(Products::class);
    }
}
