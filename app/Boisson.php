<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    protected $table = 'boissons';
    protected $primaryKey ='CODE';
    protected $keyType = 'string';
    public $incrementing =  false;
    public  $timestamps = false;
}

