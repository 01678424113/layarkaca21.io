<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public static $UN_ACTIVE = 0;
    public static $ACTIVE = 1;

    public function affiliate()
    {
        return $this->hasMany('App\Models\Affiliate');
    }
}
