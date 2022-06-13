<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WomenEmpowerment extends Model
{
    use HasFactory;
    protected $guarded = '';
    public function getRouteKeyName()
    {
        return 'slug';
    }
        protected $table = 'women_empowerment';
}
