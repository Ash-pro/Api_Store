<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    public function toArray($request)
    {
        return [
          'name'=>$this->name,
          'description'=>$this->details,
          'image_link'=>$this->image,
          'price'=>$this->price,
          'stock'=>$this->stock == 0 ? 'out of stock ': $this->stock ,
          'Discount'=>$this->discount,
          'Total_Price'=>$this->TotalPrice(),
          'Rating' =>$this->ratingStar() ,
          'href' => [
              'Review'=> route('Review.index',$this->id)
                ]
        ];

    }

    private function ratingStar()
    {
        return $this->reviews->count() > 0
            ? round($this->reviews->sum('star')/$this->reviews->count(),2)
            : ' Not ration yet';

    }

    private function TotalPrice(){

       return round( (1- ($this->discount / 100) ) * $this->price,2);
    }
}
