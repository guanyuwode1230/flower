<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User_address extends Model
{
    protected $table='user_address';
    protected $primaryKey='user_address_id';
    public $timestamps=false;
    protected $guarded=[];
}
