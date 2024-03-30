<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['user_id', 'first_name', 'last_name', 'address1', 'address2', 'zip', 'city', 'phone', 'email'];

    public function users()
    {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }

    public function products()
    {
        return $this->hasMany('\App\Models\SoldProduct');
    }

    public function carts()
    {
        return $this->hasMany('\App\Models\Cart', 'cart_id');
    }

}
