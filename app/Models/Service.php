<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Service extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['name', 'content', 'image_name', 'image_time'];

    public function children()
    {
        return $this->hasMany(Service::class, 'parent_id', 'id');
    }

    public function first_child()
    {
        return $this->children()->take(1);
    }

    public function parent()
    {
        return $this->belongsTo(\App\Models\Service::class, 'parent_id');
    }

}
