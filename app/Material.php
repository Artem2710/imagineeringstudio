<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 29.11.2018
 * Time: 19:00
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class Material extends Model
{

    public function product()
    {
        return $this->hasOne('App\Product');
    }
}