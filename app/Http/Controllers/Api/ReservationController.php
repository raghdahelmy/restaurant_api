<?php

namespace App\Http\Controllers\Api;

use App\Models\Reservation;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ReservationResource;
use App\Http\Requests\StoreReservationRequest;

class ReservationController extends Controller
{
    //
        use ApiResponse;

public function store(StoreReservationRequest $request)
{

    $data = $request->only(['name', 'phone', 'tables', 'people', 'date', 'time']);

    //    $reservation = Auth::user()->reservations()->create($data);

    $data['user_id'] = Auth::id();

    $reservation = Reservation::create($data);

return $this->SuccessResponse(new ReservationResource($reservation), 'Reservation created successfully.', 201);
}


}
