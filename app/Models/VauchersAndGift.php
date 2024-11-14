<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class VauchersAndGift extends Model
{
    use HasFactory, Translatable, Resizable;
    protected $translatable = ['name','content'];
}
