<?php

namespace Fyggi\SimpleUuid;

use Illuminate\Database\Eloquent\Builder;
use Ramsey\Uuid\Uuid;

trait HasUuid
{
    public static function bootHasUuid(): void
    {
        static::creating(function ($model) {
            if ($model->uuid === null) {
                $model->uuid = Uuid::uuid4();
            }
        });
    }

    public function scopeWhereUuid(Builder $builder, string $uuid): Builder
    {
        return $builder->where('uuid', $uuid);
    }

    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    public function getRouteKey(): string
    {
        return $this->uuid;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }
}
