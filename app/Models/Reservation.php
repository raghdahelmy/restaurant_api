<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $fillable = [
    'user_id', 'name', 'phone', 'tables', 'people', 'date', 'time'
];

public function user()
{
    return $this->belongsTo(User::class);
}

}
