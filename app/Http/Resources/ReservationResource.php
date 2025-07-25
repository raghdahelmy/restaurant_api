<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id'      => $this->id,
            'name'    => $this->name,
            'phone'   => $this->phone,
            'tables'  => $this->tables,
            'people'  => $this->people,
            'date'    => $this->date,
            'time'    => $this->time,
            'user'    => [
                'id'   => $this->user->id,
                'name' => $this->user->name,
            ]
            ];
    }
}
