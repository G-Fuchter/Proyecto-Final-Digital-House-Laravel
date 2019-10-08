<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_items';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function cart() {
        return $this->belongsTo(Cart::class, "cart_id");
    }

}