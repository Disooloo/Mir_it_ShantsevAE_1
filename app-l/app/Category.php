<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static Create(array $data)
 */
class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = false;
}
