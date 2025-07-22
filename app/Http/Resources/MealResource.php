<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MealResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'category'=>$this->category->name,
            'id' => $this->id,
            'name' => $this->name,
            'price'=> $this->price,

            // 'category'=>new CategoryResource($this->whenLoaded('category'))

        ];
    }
}
