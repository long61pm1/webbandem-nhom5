<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $timestamps = false;
    protected $fillable=[
        'admin_username','admin_password','admin_name','admin_phone','admin_email','admin_image'
    ];
    protected $primaryKey= 'admin_id';
    protected $table = 'tbl_admin';
}
