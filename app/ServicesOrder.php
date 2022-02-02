<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesOrder extends Model
{
    protected $table='tbl_vehicle_service';
    protected $primaryKey = 'user_vehicle_id';
}
