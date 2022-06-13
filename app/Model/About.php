<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model

{
    use HasFactory;
    protected $table = 'abouts';
    protected $guarded = '';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
