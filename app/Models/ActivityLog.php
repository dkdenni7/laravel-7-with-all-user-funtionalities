<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{

    public $timestamps = false;
    protected $fillable = ['user_id', 'meta_key', 'meta_value', 'status', 'created_at', 'updated_at'];

}
