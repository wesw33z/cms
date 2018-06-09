<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // link to photo

    public function imageable(){

      return $this->morphTo();

    }

}
