<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use UuidTrait, SoftDeletes;
    protected $guarded = [];


    public function position()
    {
        // return $this->has
    }
}

