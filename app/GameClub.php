<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameClub extends Model
{
    protected $fillable = ['Name', 'Capacity', 'GameName'];
}
