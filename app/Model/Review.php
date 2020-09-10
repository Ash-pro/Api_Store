<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Review extends Model
{
    protected $guarded = [];

    public function product (){
        return $this->belongsTo(Product::class);
    }//end of Product
}
