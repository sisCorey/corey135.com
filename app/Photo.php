<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;

    public $table = 'photo';

    // protected $dateFormat = 'U';

    protected $dates = ['delete_at'];

    protected $hidden = ['deleted_at','updated_at','id'];
}
