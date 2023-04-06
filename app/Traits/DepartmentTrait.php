<?php
namespace App\Traits;

use App\Models\Department;

trait DepartmentTrait
{
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}

