<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    
    protected $table = 'uploads';

    protected $primaryKey = 'id';

    protected $guarded = [];


}
