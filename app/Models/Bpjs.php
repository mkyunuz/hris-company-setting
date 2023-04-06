<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bpjs extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    // protected $primaryKey = "client_id";
}
