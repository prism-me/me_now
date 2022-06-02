<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopBooking extends Model
{
    use HasFactory;
    protected $table = 'workshop_bookings';
    protected $primaryKey = 'id';
    protected $guarded = '';
}
