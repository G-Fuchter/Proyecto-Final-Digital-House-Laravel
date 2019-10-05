<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Product extends Model
{
    protected $table = 'products';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function cart_item() {
        return $this->belongsToMany(Cart::class, 'cart_item', 'user_id', 'product_id');
    }
}
