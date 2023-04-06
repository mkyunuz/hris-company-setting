<?php

namespace App\Models;

use App\Traits\DepartmentTrait;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Office extends Model
{
    use UuidTrait, SoftDeletes;
    protected $guarded = [];

    public function departments()
    {
        return $this->morphedByMany(Department::class, 'officeable', "office_has_models");
    }

}
