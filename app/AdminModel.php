<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
     protected $table='tbl_admin_login';
    protected $primaryKey = 'admin_id';
}
