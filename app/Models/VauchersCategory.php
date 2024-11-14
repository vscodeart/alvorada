<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class VauchersCategory extends Model
{
    use HasFactory, Translatable;

    protected $translatable = ['name'];

    public function vouchers()
    {
        return $this->hasMany(VauchersAndGift::class, 'vauchers_category_id', 'id');
    }
}
