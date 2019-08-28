<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Product extends Model
{
    protected $table = 'products';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function cart() {
        return $this->belongsToMany(User::class, 'cart_item', 'user_id', 'product_id');
    }
}
