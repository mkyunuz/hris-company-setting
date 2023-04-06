<?php
namespace App\Traits;

use Ramsey\Uuid\Uuid;

// use Facades\Str;

trait UuidTrait
{
    public static function bootUuidTrait()
    {
        static::creating(function ($model) {
            $model->keyType = 'string';
            $model->incrementing = false;
            $model->{$model->getKeyName()} = $model->{$model->getKeyName()} ?: Uuid::uuid4()->toString();
        });
    }
    
    public function getIncrementing()
    {
        return false;
    }
    
    public function getKeyType()
    {
        return 'string';
    }
}