<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pph21 extends Model
{
    use UuidTrait, SoftDeletes;
    protected $guarded = [];
    protected $primaryKey = "client_id";
}
