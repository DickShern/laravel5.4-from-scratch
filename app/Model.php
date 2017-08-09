<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	// $fillable = whitelist
	// $guarded = blacklist
    protected $guarded = [];
}
