<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * //class ProductCollection extends ResourceCollection
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "totalPrice" => round((1- ($this->discount/100)) * $this->discount,2),
            "rating" => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(), 2) : 'No rating yet',
            "href" => [ 
                    "link" =>  route('products.show',$this->id),
                ]
        ];
    }
}