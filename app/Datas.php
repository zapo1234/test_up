<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datas extends Model
{
    protected $table = 'datas';
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users', 'product1','product2','product3','product4','date',
    ];
}
