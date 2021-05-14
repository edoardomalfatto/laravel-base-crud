<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    //
    protected $fillable=['name','description','color','size', 'season','price'];
}
