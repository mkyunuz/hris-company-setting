<?php

namespace App\Models;

use App\Traits\DepartmentTrait;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use UuidTrait, SoftDeletes, DepartmentTrait;
    protected $guarded = [];

    
    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function positions()
    {
        return $this->hasMany(Department::class);
    }

    public function setting()
    {
        return $this->hasOne(ClientSetting::class);
    }
}
