<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Brand extends Model
{
    use HasFactory;

    protected $table = "brands";
    
    protected $fillable = ['name', 'image', 'brand_id'];

    
    public function products()
    {
        return $this->hasMany('\App\Models\Product', 'brand_id', 'id');
    }
    
    protected $fillable = ['name', 'image'];

}
