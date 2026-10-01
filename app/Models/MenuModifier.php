<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuModifier extends Model
{
    protected $fillable = ['tenant_id', 'menu_id', 'name', 'price_delta'];
}
