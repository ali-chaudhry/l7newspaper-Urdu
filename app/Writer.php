<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use Uuid;
    protected $primaryKey = 'id';
    public $incrementing = false;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string'
    ];

    protected $fillable = [
        'name', 'designation', 'user','summary', 'image'
    ];
}
