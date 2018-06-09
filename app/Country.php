<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

public function posts() {

    // Joins Post and User Models

    return $this->hasManyThrough('App\Post', 'App\User');

    // This code shows how to link table that have/can not be linked via migrations
    // return $this->hasManyThrough('App\Post', 'App\User', 'country_id', 'user_id');

}

}
