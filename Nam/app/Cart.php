<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function cart_item() {
        return $this->belongsToMany(Product::class, 'cart_item', 'cart_id', 'product_id');
    }

    public function user() {
        return $this->belongsTo(User::class, "user_id");
    }
}
