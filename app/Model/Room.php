<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'id';
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
