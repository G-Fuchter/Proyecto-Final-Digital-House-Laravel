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
        return $this->hasMany(CartItem::class, "cart_items");
    }
}
