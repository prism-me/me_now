<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Home extends Model
{
    use HasFactory;
    protected $table = 'homes';
    protected $guarded = '';

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
