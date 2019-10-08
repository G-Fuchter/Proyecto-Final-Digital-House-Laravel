<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    public $primaryKey = 'id';
    public $timestamps = false;

    public function cart_item() {
        return $this->hasMany(CartItem::class);
    }

    public function user() {
        return $this->belongsTo(User::class, "user_id");
    }
}
