<?php
namespace App\Traits;

use App\Models\Position;

trait PositionTrait
{
    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}

