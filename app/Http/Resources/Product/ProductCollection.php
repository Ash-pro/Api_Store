<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;
//use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends JsonResource
{

    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'stock' => $this->stock == 0 ? 'out of stock ' : $this->stock,
            'Discount' => $this->discount,
            'Total_Price' => $this->TotalPrice(),
//            'Rating' => $this->ratingStar(),
            'href' => [
                'Product Details' => route('products.show', $this->id)
            ]
        ];

    }

    private function ratingStar()
    {
        return $this->reviews->count() > 0
            ? round($this->reviews->sum('star') / $this->reviews->count(), 2)
            : ' Not ration yet';

    }

    private function TotalPrice()
    {

        return round((1 - ($this->discount / 100)) * $this->price, 2);
    }
}
