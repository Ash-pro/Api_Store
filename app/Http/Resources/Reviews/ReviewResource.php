<?php

namespace App\Http\Resources\Reviews;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Customer' => $this->customer,
            'content of Review' => $this->review,
            'Number of Star' => $this->star
        ];
    }
}
