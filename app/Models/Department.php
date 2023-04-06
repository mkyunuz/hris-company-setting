<?php

namespace App\Models;

use App\Traits\PositionTrait;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use UuidTrait, PositionTrait, SoftDeletes;
    protected $guarded = [];

    public function offices()
    {
        return $this->morphToMany(Office::class, "model", "office_has_models");
    }

    public function position()
    {
        // return $this->
    }
    
}
