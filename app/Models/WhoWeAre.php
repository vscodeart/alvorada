<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class WhoWeAre extends Model
{
    use HasFactory, Translatable;
    protected $translatable = ['name','content'];

    public function children()
    {
        return $this->hasMany(WhoWeAre::class, 'parent_id', 'id');
    }
}
