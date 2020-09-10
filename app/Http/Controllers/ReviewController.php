<?php

namespace App\Http\Controllers;

use App\Http\Resources\Reviews\ReviewResource;
use App\Model\Product;
use App\Model\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Product $product)
    {
        return ReviewResource::collection($product->reviews);
//        return Review::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Review $review)
    {
        //
    }

    public function edit(Review $review)
    {
        //
    }

    public function update(Request $request, Review $review)
    {
        //
    }

    public function destroy(Review $review)
    {
        //
    }
}
