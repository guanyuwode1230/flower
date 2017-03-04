<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='products';
    protected $primaryKey='product_id';
    public $timestamps=false;
    protected $guarded=[];
}
