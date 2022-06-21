<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $primaryKey = 'id';

     public function department()
    {      
        return $this->hasOne('App\Model\Department', 'id', 'department_id');
    }

    public function TimeTabledata(){
    	return $this->hasMany('App\Model\TimeTable',"doctor_id","id");
    }
    


    public function rattingdata()
    {      
        return $this->hasMany('App\Model\Review', 'doctor_id', 'id');
    }
    
}
?>