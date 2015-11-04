<?php

namespace songs;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /*
     * Fillable fields of song
     *
     */

    protected $fillable = [
      'title','lyrics','slug'
    ];


}
