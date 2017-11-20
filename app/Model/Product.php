<?php

namespace App\Model;

use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name', 'detail', 'price', 'stock', 'discount'
    ];

    public function reviews()
    {
    	return $this->hasMany(Review::class);
    }
}
