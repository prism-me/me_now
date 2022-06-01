<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id';
        protected $guarded = '';
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
